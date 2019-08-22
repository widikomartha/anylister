<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\VAlidation\Validator;

class TaskAddForm extends Form
{
    protected function _buildValidator(Validator $validator)
    {
        $validator->requirePresence([
                    'description' => [
                        'message' => 'List is required.'
                    ]])
                  ->requirePresence([
                    'selected_date' => [
                        'message' => 'Date is required.'
                    ]]);
        return $validator;
    }
    protected function _execute(array $data) {
        return true;
    }
}