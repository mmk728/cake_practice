<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Samplecake Model
 *
 * @method \App\Model\Entity\Samplecake get($primaryKey, $options = [])
 * @method \App\Model\Entity\Samplecake newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Samplecake[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Samplecake|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Samplecake saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Samplecake patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Samplecake[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Samplecake findOrCreate($search, callable $callback = null, $options = [])
 */
class SamplecakeTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('samplecake');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 20)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->integer('age')
            ->requirePresence('age', 'create')
            ->notEmptyString('age');

        $validator
            ->scalar('address')
            ->maxLength('address', 20)
            ->requirePresence('address', 'create')
            ->notEmptyString('address');

        return $validator;
    }
}
