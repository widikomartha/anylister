<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\VAlidation\Validator;

class UserLoginForm extends Form
{
    protected function _buildValidator(Validator $validator)
    {
        $validator->requirePresence([
                    'email' => [
                        'message' => 'Email is required.'
                    ]])
                  ->add('email', 'validFormat', [
                        'rule' => 'email',
                        'message' => 'Email must be valid'
                    ])
                  ->requirePresence([
                    'password' => [
                        'message' => 'Password is required.'
                    ]])
                  ->add('password', [
                    'length' => [
                        'rule' => ['minLength', 6],
                        'message' => 'Password need to be at least 6 characters long',
                    ]
                ]);
        return $validator;
    }
    protected function _execute(array $data) {
        return true;
    }
}