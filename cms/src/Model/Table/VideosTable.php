<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class VideosTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);
        $this->setTable('videos');
        $this->setPrimaryKey('id');
        $this->belongsTo('Users');
    }

    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->notEmptyString('titulo')
            ->notEmptyString('url');

        return $validator;
    }
}
?>