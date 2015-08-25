<?php
namespace App\Model\Table;

use App\Model\Entity\Request;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Request Model
 *
 */
class RequestTable extends Table
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

        $this->table('request');
        $this->displayField('name');

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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->add('email', 'valid', ['rule' => 'email'])
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->add('age', 'valid', ['rule' => 'numeric'])
            ->requirePresence('age', 'create')
            ->notEmpty('age');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->add('monthly_wage', 'valid', ['rule' => 'decimal'])
            ->requirePresence('monthly_wage', 'create')
            ->notEmpty('monthly_wage');

        $validator
            ->requirePresence('country', 'create')
            ->notEmpty('country');

        $validator
            ->add('value', 'valid', ['rule' => 'decimal'])
            ->requirePresence('value', 'create')
            ->notEmpty('value');

        $validator
            ->add('installments', 'valid', ['rule' => 'numeric'])
            ->requirePresence('installments', 'create')
            ->notEmpty('installments');

        $validator
            ->requirePresence('supplier', 'create')
            ->notEmpty('supplier');

        $validator
            ->add('TAN', 'valid', ['rule' => 'decimal'])
            ->requirePresence('TAN', 'create')
            ->notEmpty('TAN');

        $validator
            ->add('approval_rating', 'valid', ['rule' => 'decimal'])
            ->requirePresence('approval_rating', 'create')
            ->notEmpty('approval_rating');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
