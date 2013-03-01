<?php
App::uses('AppController', 'Controller');
/**
 * UserLangs Controller
 *
 * @property UserLang $UserLang
 */
class UserLangsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->UserLang->recursive = 0;
		$this->set('userLangs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UserLang->exists($id)) {
			throw new NotFoundException(__('Invalid user lang'));
		}
		$options = array('conditions' => array('UserLang.' . $this->UserLang->primaryKey => $id));
		$this->set('userLang', $this->UserLang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UserLang->create();
			if ($this->UserLang->save($this->request->data)) {
				$this->Session->setFlash(__('The user lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user lang could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserLang->User->find('list');
		$langs = $this->UserLang->Lang->find('list');
		$this->set(compact('users', 'langs'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->UserLang->exists($id)) {
			throw new NotFoundException(__('Invalid user lang'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserLang->save($this->request->data)) {
				$this->Session->setFlash(__('The user lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserLang.' . $this->UserLang->primaryKey => $id));
			$this->request->data = $this->UserLang->find('first', $options);
		}
		$users = $this->UserLang->User->find('list');
		$langs = $this->UserLang->Lang->find('list');
		$this->set(compact('users', 'langs'));
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
		$this->UserLang->id = $id;
		if (!$this->UserLang->exists()) {
			throw new NotFoundException(__('Invalid user lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserLang->delete()) {
			$this->Session->setFlash(__('User lang deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User lang was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->UserLang->recursive = 0;
		$this->set('userLangs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->UserLang->exists($id)) {
			throw new NotFoundException(__('Invalid user lang'));
		}
		$options = array('conditions' => array('UserLang.' . $this->UserLang->primaryKey => $id));
		$this->set('userLang', $this->UserLang->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->UserLang->create();
			if ($this->UserLang->save($this->request->data)) {
				$this->Session->setFlash(__('The user lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user lang could not be saved. Please, try again.'));
			}
		}
		$users = $this->UserLang->User->find('list');
		$langs = $this->UserLang->Lang->find('list');
		$this->set(compact('users', 'langs'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->UserLang->exists($id)) {
			throw new NotFoundException(__('Invalid user lang'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserLang->save($this->request->data)) {
				$this->Session->setFlash(__('The user lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UserLang.' . $this->UserLang->primaryKey => $id));
			$this->request->data = $this->UserLang->find('first', $options);
		}
		$users = $this->UserLang->User->find('list');
		$langs = $this->UserLang->Lang->find('list');
		$this->set(compact('users', 'langs'));
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
		$this->UserLang->id = $id;
		if (!$this->UserLang->exists()) {
			throw new NotFoundException(__('Invalid user lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->UserLang->delete()) {
			$this->Session->setFlash(__('User lang deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User lang was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
