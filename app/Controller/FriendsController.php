<?php
App::uses('AppController', 'Controller');
/**
 * Friends Controller
 *
 * @property Friend $Friend
 */
class FriendsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Friend->recursive = 0;
		$this->set('friends', $this->paginate());
	}


		public function isAuthorized($user){
		if($this->action=='add'){
			if(isset($user['group_id']) && $user['group_id'] > 0)
				return true;

		}

			if(in_array($this->action, array('edit','delete'))){
				if(isset($user['group_id']) && $user['group_id'] == 2)
					return true;

				else{
					$quote_id = $this->request->params['pass'][0];
					$user_id = $user['id'];
					                                
					if($this->Quote->isOwnedBy($quote_id,$user_id)){
       					 return true;
				}

				}
			}


	return parent::isAuthorized($user);
}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Friend->exists($id)) {
			throw new NotFoundException(__('Invalid friend'));
		}
		$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
		$this->set('friend', $this->Friend->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Friend->create();
			$this->request->data['Friend']['user_id'] = $this->Auth->user('id');
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('La demande d\'ajout a bien été envoyée'));
				$this->redirect(array('action' => 'index'));
/*				$accept = new valid_friend();
				$accept->Friend->User*/
			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'));
			}
		}
		$users = $this->Friend->User->find('list');
		$friends = $this->Friend->User->find('list');
		$this->set(compact('users','friends'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Friend->exists($id)) {
			throw new NotFoundException(__('Invalid friend'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
			$this->request->data = $this->Friend->find('first', $options);
		}
		$users = $this->Friend->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Friend->id = $id;
		if (!$this->Friend->exists()) {
			throw new NotFoundException(__('Invalid friend'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Friend->delete()) {
			$this->Session->setFlash(__('Friend deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Friend was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Friend->recursive = 0;
		$this->set('friends', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Friend->exists($id)) {
			throw new NotFoundException(__('Invalid friend'));
		}
		$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
		$this->set('friend', $this->Friend->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Friend->create();
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'));
			}
		}
		$users = $this->Friend->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Friend->exists($id)) {
			throw new NotFoundException(__('Invalid friend'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Friend->save($this->request->data)) {
				$this->Session->setFlash(__('The friend has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The friend could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Friend.' . $this->Friend->primaryKey => $id));
			$this->request->data = $this->Friend->find('first', $options);
		}
		$users = $this->Friend->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Friend->id = $id;
		if (!$this->Friend->exists()) {
			throw new NotFoundException(__('Invalid friend'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Friend->delete()) {
			$this->Session->setFlash(__('Friend deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Friend was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
