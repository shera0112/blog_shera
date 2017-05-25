<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class PostsTable extends Table{
  public function initialize(array $config){
    parent::initialize($config);

    $this->setTable('posts');
    $this->setPrimaryKey('id');
    $this->setDisplayField('name');
    $this->addBehavior('Timestamp');

    $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
  }
}
