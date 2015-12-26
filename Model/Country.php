<?php
App::uses('AppModel', 'Model');
/**
 * Country Model
 *
 * @property Region $Region
 */
class Country extends GeographyAppModel {

/**
 * Display field
 *
 * @var string
 */
    public $displayField = 'name';

/**
 * Validation rules
 *
 * @var array
 */
    public $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'abbreviation' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'active' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                //'message' => 'Your custom message here',
                //'allowEmpty' => false,
                //'required' => false,
                //'last' => false, // Stop validation after this rule
                //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
    public $hasMany = array(
        'State' => array(
            'className' => 'Geography.State',
            'foreignKey' => 'country_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    
    /** 
     * Find the list of Countries. Get the cached version first.
     * @return Ambigous <mixed, boolean, multitype:, NULL, unknown>
     */
    public function findList() {
        $countries = Cache::read('_geography_country_list', 'geography');
        if (empty($countries)) {
            $countries = $this->find('list');
            Cache::write('_geography_country_list',$countries, 'geography');
        }
        return $countries;
        
    }

    /**
     * Clear the cache and reset it.
     * @see Model::afterSave()
     */
    public function afterSave($created) {
        parent::afterSave($created);
        Cache::delete('_geography_country_list', 'geography');
        $this->findList();
    }
    /**
     * Clear the cache and reset it.
     * @see Model::afterDelete()
     */
    public function afterDelete() {
        parent::afterDelete();
        Cache::delete('_geography_country_list', 'geography');
        $this->findList();
    }
    
}
