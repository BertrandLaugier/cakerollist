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
			$message = ClassRegistry::init('Message');
			$message_info = $message->find('first', array(
				'conditions' => array('User.id'=> $user_id)
			));
			
			// Recupère la quantité d'xp de l'utilisateur
			$xp_user = $message_info['User']['xp_nb'];
			// Recupère le niveau de l'utilisateur
			$level = $message_info['User']['xp_id'];


			$this->addXP($level,$user_id,$xp_user,10);
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
		public function addXP($level,$user_id,$xp_user,$add_xp){
			
			// Ajoute 10 d'xp à l'envoie d'un message
			$new_xp_user= $xp_user + $add_xp;

			

		
			$this->checkLevel($level,$user_id,$new_xp_user);
		
		}
		/**
		 * check level
		 * check if the level is suited to the xp
		 * 
		 * @param int $user_id 
		 * @return to determine
		 * @author Remy 
		 */
		public function checkLevel($level,$user_id,$new_xp_user){
			
			// Déclaration des paliers pour chaque niveau
			$levels = array(0,100,150,220,350,500,1000);

   				// Vérifie si l'xp de l'utilisateur correspond au palier pour gagner un niveau
				if($new_xp_user == $levels[$level]){
					$level = $level+1;

					// Reset l'xp quand on gagne un niveau
					$new_xp_user = 0;	
				

					//Sauvegarde l'xp et le niveau de l'utilisateur
					$user = ClassRegistry::init('User');
								
						$user->id = $user_id;
						$user->save(array(
							'xp_id' => $level,
							'xp_nb' => $new_xp_user
						));			
				}
				// Sauvegarder l'xp si l'utilisateur ne gagne pas de niveau
				else{
					
					$user = ClassRegistry::init('User');
								
						$user->id = $user_id;
						$user->save(array(
							'xp_nb' => $new_xp_user
						));
				}
		}		
	}
 ?>