<?php
// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('users');
        $this->setPrimaryKey('id');
        $this->hasMany('Tasks')
             ->setForeignKey('user_id');
        $this->hasMany('Categories')
             ->setForeignKey('user_id');
    }
    public function beforeSave($event, $entity, $options) 
    {
        date_default_timezone_set("Asia/Makassar");
        if ($entity->isNew()) {
            $entity->created = date('Y-m-d H:m:s');
        }
        else {
            $entity->modified = date('Y-m-d H:m:s');
        }
    }
}
?>