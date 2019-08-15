<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\VAlidation\Validator;

class CategoryAddForm extends Form
{
    protected function _buildValidator(Validator $validator)
    {
        $validator->requirePresence([
                    'name']);
        return $validator;
    }
    protected function _execute(array $data) {
        return true;
    }
}