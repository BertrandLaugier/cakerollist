<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 * @property Group $Group
 * @property Race $Race
 * @property Picture $Picture
 */




class User extends AppModel {
public $displayField = 'username';



public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Race' => array(
			'className' => 'Race',
			'foreignKey' => 'race_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Picture' => array(
			'className' => 'Picture',
			'foreignKey' => 'picture_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Xp' => array(
			'className' => 'Xp',
			'foreignKey' => 'xp_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
