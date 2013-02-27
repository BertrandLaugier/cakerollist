<?php
App::uses('AppModel', 'Model');
/**
 * Message Model
 *
 * @property User $User
 */
class Message extends AppModel {

	public function afterSave($created){

		if($created){
			$this->getEventManager()->dispatch(new CakeEvent('Model.Message.add',$this));
		}


	}
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
		'Dest' => array(
			'className' => 'User',
			'foreignKey' => 'dest_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)

	);


}
