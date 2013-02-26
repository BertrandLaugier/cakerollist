<?php
App::uses('AppModel', 'Model');
/**
 * Picture Model
 *
 * @property User $User
 */
class Picture extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed
	public $displayField ='url';
/**
 * hasMany associations
 *
 * @var array
 */


	public function isOwnedBy($picture_id,$user_id){

        return $this->field('id',array('id'=>$picture_id, 'user_id'=>$user_id)) === $picture_id;

	}

}
