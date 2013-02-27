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
			$count = $message->find('count', array(
				'conditions' => array('Message.user_id'=> $user_id)
			));
			debug($count);


		}
	}
 ?>