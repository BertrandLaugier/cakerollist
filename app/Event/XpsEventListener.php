<?php 
App::uses('CakeEventListener','Event');


	class XpsEventListener implements CakeEventListener
	{
		
		public function implementedEvents()
		{
			return array(
				'Model.Message.add' => 'userSendMessage');
		}

		public function userSendMessage($event){
			$user_id = $event->subject()->data['Message']['user_id'];
			$message = ClassRegistry:: init('Message');
			$count = $message->find('first', array(
				'conditions' => array('User.id'=> $user_id)
			));
			
			// Recupère la quantité d'xp de l'utilisateur
			$xp_nb = $count['User']['xp_nb'];
			// Recupère le niveau de l'utilisateur
			$xp_id = $count['User']['xp_id'];


			$this->addXP($xp_id,$user_id,$xp_nb,$count,10);
		}
		
		/**
		 * addXP
		 * add some xp in the database
		 *
		 * @param int $user_id 
		 * @param int $xp XP to add
		 * @return void
		 * @author Remy
		 */
		public function addXP($xp_id,$user_id,$xp_nb,$count,$xp){
			
			// Ajoute 10 d'xp à l'envoie d'un message
			$new_xp= $xp_nb + $xp;

			

		
			$this->checkLevel($xp_id,$new_xp);
		
		}
		/**
		 * check level
		 * check if the level is suited to the xp
		 * 
		 * @param int $user_id 
		 * @return to determine
		 * @author Remy 
		 */
		public function checkLevel($xp_id,$new_xp){
			
			// Déclaration des paliers pour chaque niveau
			$levels = array(0,100,150,220,350,500,1000);

   				// Vérifie si l'xp de l'utilisateur correspond au palier pour gagner un niveau
				if($new_xp == $levels[$xp_id]){
					$xp_id = $xp_id+1;

					// Reset l'xp quand on gagne un niveau
					$new_xp = 0;	
					
					//Sauvegarde l'xp et le niveau de l'utilisateur
					//if ($this->request->is('post')) {
					//	$this->Message->create();
					//	$this->request->data['Message']['user_id'] = $this->Auth->user('id');
					//	if ($this->Message->save($this->request->data)) {
					//		$this->Session->setFlash(__('The message has been saved'));
					//		$this->redirect(array('action' => 'index'));
					//}
					debug($xp_id);
					die();					
				}
				// Sauvegarder l'xp si l'utilisateur ne gagne pas de niveau
				else{

				}
		}		
	}
 ?>