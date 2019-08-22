<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class TasksTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('tasks');
        $this->setPrimaryKey('id');
        $this->belongsTo('Users')
             ->setForeignKey('user_id')
             ->setJoinType('INNER');
    }
    public function beforeSave($event, $entity, $options) 
    {
        date_default_timezone_set("Asia/Makassar");
        if ($entity->isNew()) {
            $entity->created = date('Y-m-d H:m:s');
            $entity->status  = '1';
        }
        else {
            $entity->modified = date('Y-m-d H:m:s');
        }
    }
}
?>