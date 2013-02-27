<?php
App::uses('AppModel', 'Model');
/**
 * Race Model
 *
 * @property User $User
 */
class Race extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';
public $actAs = array('Containable','Media.Media');

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'race_id',
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

}
