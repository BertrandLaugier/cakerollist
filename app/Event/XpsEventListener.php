<?php 
	App::uses('CakeEventListener','Event');

	/**
	* 
	*/
	class XpsEventListener implements CakeEventListener
	{
		
		public function implementedEvents()
		{
			return array(
				'Model.Message.add' => 'userAddMessage');
		}

		public function userAddMessage($event){
			$user_id = $event->subject()->data['Message']['user_id'];
			$message = ClassRegistry:: init('Message');
			$count = $message->find('first', array(
				'conditions' => array('User.id'=> $user_id)
			));
			
			$xp = $count['User']['xp_nb'];
			$this->addXP($user_id,150);
		}
		
		/**
		 * addXP
		 * add some xp in the database
		 *
		 * @param int $user_id 
		 * @param int $xp XP to add
		 * @return void
		 * @author gaspard
		 */
		public function addXP($user_id,$xp){
			
			
			debug($xp);
			//$this->checkLevel($user_id);
		}
		
		
		/**
		 * check level
		 * check if the level is suited to the xp
		 * 
		 * @param int $user_id 
		 * @return to determine
		 * @author gaspard
		 */
		public function checkLevel($user_id){
			$levels = array(100,150,225,350,500,100000);
			/*
			
				if($xp > 100 && level < 2){
					je passe à level 2
				}
				if($xp > 400 && level < 3){
					je passe à level 3
				}
			*/
			
			
		}
		
	}
 ?>