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
use App\Form\UserRegisterForm;
use App\Form\UserLoginForm;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class LoginController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadModel('Users');
        $this->loadComponent('Flash');

        // Allow the display action so our PagesController
        // continues to work. Also enable the read only actions.
        $this->Auth->allow();
        $this->viewBuilder()->setLayout('login');
    }
    // public function isAuthorized($user)
    // {
    //     // By default deny access.
    //     return false;
    // }
    public function signin()
    {
        $userLoginForm = new UserLoginForm();

        $this->set('userLoginForm', $userLoginForm);

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            $this->log($this->request->getData(), 'debug');
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect(
                    ['controller' => 'Content', 'action' => 'index']
                );
            }
            $this->Flash->error('Your email or password is incorrect.');
        }
    }
    public function register()
    {
        $userRegisterForm = new UserRegisterForm();

        $this->set('userRegisterForm', $userRegisterForm);

        if ($this->request->is('post')) {
            if ($userRegisterForm->execute($this->request->getData())) {
                $user = $this->Users->newEntity();
                $user = $this->Users->patchEntity($user, $this->request->getData());

                if ($this->Users->save($user)) {
                    $this->Flash->set('Register success.');
                    return $this->redirect(
                        ['controller' => 'Login', 'action' => 'signin']
                    );
                }
                else {
                    $this->Flash->set('Register failed.');
                }
            }
            else {
                $this->Flash->set($userRegisterForm->error());
            }
        }
    }
    public function logout()
    {
        $this->Flash->success('You are now logged out.');
        return $this->redirect($this->Auth->logout());
    }
}
