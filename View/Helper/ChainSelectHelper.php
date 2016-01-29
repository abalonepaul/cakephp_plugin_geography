<?php
/**
* This is a CakePHP helper used to implement a chain select feature so that the states field will be populated based 
* on the country selected.
*
* @author Paul Marshall
* @version 1.0
*
*/
 App::uses('AppHelper', 'View/Helper');

 /**
* PHP5 / CakePHP 2.x
*
* @author Paul Marshall
* @link https://github.com/abalonepaul/cakephp_plugin_geography
* @package cakephp_plugin_geography
* @license MIT License (http://www.opensource.org/licenses/mit-license.php)
*
*
* v1.0: Cake2.x
*/
class ChainSelectHelper extends AppHelper {


/**
* Cakephp builtin helper
*
* @var array
*/
public $helpers = array('Form','Html', 'Js');

protected $defaultCountry = '204'; //US



public function country($fieldName, $attributes = array()) {
    if(strpos($fieldName, '.') !== false) {
        $field = explode('.', $fieldName);
        $model = $field[0];
        $parsedFieldName = $field[1];
    } else {
        $model = $this->Form->model(); 
        $parsedFieldName = $fieldName;
    }
    $targetId = $model . Inflector::camelize(str_replace('country', 'state',$parsedFieldName));
    $inputAttributes = array('escape' => false, 'empty' => 'Select a Country', 'onchange' => "get_states(this,{$targetId})");
    $attributes = Hash::merge($attributes,$inputAttributes);
    echo $this->Form->input($fieldName,$attributes);
}

public function state($fieldName) {
    
    echo $this->Form->input($fieldName);
    
}


}