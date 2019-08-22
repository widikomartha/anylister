<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Form\CategoryAddForm;
use App\Form\TaskAddForm;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class ContentController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Categories');
        $this->loadModel('Tasks');

        $this->viewBuilder()->setLayout('content-master');
        $data = [
            'userData' => $this->Auth,
            'pageTagline' => 'Free Dashboard for Bootstrap 4 by Creative Tim'
        ];

        $this->set($data);

        $this->Auth->allow(['home']);

        $categoryAddForm = new CategoryAddForm();
        $taskAddForm = new TaskAddForm();
        $this->set('taskAddForm', $taskAddForm);

        $categories = $this->Categories->find('all')->contain('Users')->where(['Users.id' => $this->Auth->user('id')]);

        $data = [
            'pageTitle'   => 'Dashboard',
            'pageTagline' => 'Welcome ' . ucwords($this->Auth->user('username')),
            'categories'  => $categories,
        ];

        // $this->log($categories, 'debug');

        $this->set($data);
        $this->set('categoryAddForm', $categoryAddForm);
    }
    // public function isAuthorized($user)
    // {
    //     // By default deny access.
    //     return false;
    // }
    public function index()
    {
        $categories = $this->Categories->find('list')->select(['id', 'name'])->toArray();
        $this->set('selectCategories', $categories);        
        $this->set('categoryName', 'All Tasks');        
    }
    public function profile()
    {
        $data = [
            'pageTitle'   => 'Profile',
            'pageTagline' => 'Edit'
        ];

        $this->set($data);
    }
    public function viewCategories($id)
    {
        $category = $this->Categories->get($id);
        $this->set('category', $category);
        $this->set('categoryName', $category->name);

        
    }
    public function home()
    {
        $this->viewBuilder()->setLayout('home-temp');
    }
    public function addCategory()
    {
        $categoryAddForm = new CategoryAddForm();

        if ($this->request->is('post')) {
            if ($categoryAddForm->execute($this->request->getData())) {
                $category = $this->Categories->newEntity();
                $category = $this->Categories->patchEntity($category, $this->request->getData());
                $category->user_id = $this->Auth->user('id');

                if ($this->Categories->save($category)) {
                    $this->Flash->set('Add category success.');
                    return $this->redirect(
                        ['controller' => 'Content', 'action' => 'index']
                    );
                }
                else {
                    $this->Flash->set('Add category failed.');
                }
            }
            else {
                $this->Flash->set($categoryAddForm->error());
            }
        }
    }

    public function addTask()
    {
        $taskAddForm = new TaskAddForm();

        if ($this->request->is('post')) {
            if ($taskAddForm->execute($this->request->getData())) {
                $task = $this->Tasks->newEntity();
                $task = $this->Tasks->patchEntity($task, $this->request->getData());
                $task->user_id = $this->Auth->user('id');
                $task->category_id = $this->request->getData('category_id');

                if ($this->Tasks->save($task)) {
                    $this->Flash->set('Add Task List success.');
                    return $this->redirect(
                        ['controller' => 'Content', 'action' => 'index']
                    );
                }
                else {
                    $this->Flash->set('Add Task List failed.');
                }
            }
            else {
                $this->Flash->set($taskAddForm->error());
            }
        }
    }
}
