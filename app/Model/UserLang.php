<?php
App::uses('AppModel', 'Model');
/**
 * UserLang Model
 *
 * @property User $User
 * @property Lang $Lang
 */
class UserLang extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Lang' => array(
			'className' => 'Lang',
			'foreignKey' => 'lang_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
