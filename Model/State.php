<?php
App::uses('AppModel', 'Model');
/**
 * State Model
 *
 * @property Country $Country
 */
class State extends GeographyAppModel {

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
        'country_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
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
 * belongsTo associations
 *
 * @var array
 */
    public $belongsTo = array(
        'Country' => array(
            'className' => 'Geography.Country',
            'foreignKey' => 'country_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * Find a list of States by a given Country identifier. Any of the following can be passed:
     * Country Id (256)
     * Country Name (United States of America)
     * Country Abbreviation (US)
     * @param string $country
     * @return Ambigous <multitype:, NULL, unknown>
     */
    public function findListByCountry($country = null) {
        if (is_numeric($country)) {
            $countryId = $country;
        } else {
            $countryId = $this->Country->field('id',array(
                'OR' => array(
                    'name' => $country,
                    'abbreviation' => $country
                )
            ));
        }
        return $this->find('list',array('conditions' => array('country_id' => $countryId)));
    }


}
