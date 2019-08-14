<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class CategoriesTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('categories');
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
        }
        else {
            $entity->modified = date('Y-m-d H:m:s');
        }
    }
}
?>