<?php
App::uses('AppController', 'Controller');
/**
 * Langs Controller
 *
 * @property Lang $Lang
 */
class LangsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Lang->recursive = 0;
		$this->set('langs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lang->exists($id)) {
			throw new NotFoundException(__('Invalid lang'));
		}
		$options = array('conditions' => array('Lang.' . $this->Lang->primaryKey => $id));
		$this->set('lang', $this->Lang->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lang->create();
			if ($this->Lang->save($this->request->data)) {
				$this->Session->setFlash(__('The lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lang could not be saved. Please, try again.'));
			}
		}
		$races = $this->Lang->Race->find('list');
		$this->set(compact('races'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Lang->exists($id)) {
			throw new NotFoundException(__('Invalid lang'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lang->save($this->request->data)) {
				$this->Session->setFlash(__('The lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lang.' . $this->Lang->primaryKey => $id));
			$this->request->data = $this->Lang->find('first', $options);
		}
		$races = $this->Lang->Race->find('list');
		$this->set(compact('races'));
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
		$this->Lang->id = $id;
		if (!$this->Lang->exists()) {
			throw new NotFoundException(__('Invalid lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lang->delete()) {
			$this->Session->setFlash(__('Lang deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lang was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Lang->recursive = 0;
		$this->set('langs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Lang->exists($id)) {
			throw new NotFoundException(__('Invalid lang'));
		}
		$options = array('conditions' => array('Lang.' . $this->Lang->primaryKey => $id));
		$this->set('lang', $this->Lang->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Lang->create();
			if ($this->Lang->save($this->request->data)) {
				$this->Session->setFlash(__('The lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lang could not be saved. Please, try again.'));
			}
		}
		$races = $this->Lang->Race->find('list');
		$this->set(compact('races'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Lang->exists($id)) {
			throw new NotFoundException(__('Invalid lang'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Lang->save($this->request->data)) {
				$this->Session->setFlash(__('The lang has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lang could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lang.' . $this->Lang->primaryKey => $id));
			$this->request->data = $this->Lang->find('first', $options);
		}
		$races = $this->Lang->Race->find('list');
		$this->set(compact('races'));
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
		$this->Lang->id = $id;
		if (!$this->Lang->exists()) {
			throw new NotFoundException(__('Invalid lang'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Lang->delete()) {
			$this->Session->setFlash(__('Lang deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Lang was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
