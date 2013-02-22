<?php
App::uses('AppController', 'Controller');
/**
 * Races Controller
 *
 * @property Race $Race
 */
class RacesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Race->recursive = 0;
		$this->set('races', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Race->exists($id)) {
			throw new NotFoundException(__('Invalid race'));
		}
		$options = array('conditions' => array('Race.' . $this->Race->primaryKey => $id));
		$this->set('race', $this->Race->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Race->create();
			if ($this->Race->save($this->request->data)) {
				$this->Session->setFlash(__('The race has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The race could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Race->exists($id)) {
			throw new NotFoundException(__('Invalid race'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Race->save($this->request->data)) {
				$this->Session->setFlash(__('The race has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The race could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Race.' . $this->Race->primaryKey => $id));
			$this->request->data = $this->Race->find('first', $options);
		}
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
		$this->Race->id = $id;
		if (!$this->Race->exists()) {
			throw new NotFoundException(__('Invalid race'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Race->delete()) {
			$this->Session->setFlash(__('Race deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Race was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Race->recursive = 0;
		$this->set('races', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Race->exists($id)) {
			throw new NotFoundException(__('Invalid race'));
		}
		$options = array('conditions' => array('Race.' . $this->Race->primaryKey => $id));
		$this->set('race', $this->Race->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Race->create();
			if ($this->Race->save($this->request->data)) {
				$this->Session->setFlash(__('The race has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The race could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Race->exists($id)) {
			throw new NotFoundException(__('Invalid race'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Race->save($this->request->data)) {
				$this->Session->setFlash(__('The race has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The race could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Race.' . $this->Race->primaryKey => $id));
			$this->request->data = $this->Race->find('first', $options);
		}
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
		$this->Race->id = $id;
		if (!$this->Race->exists()) {
			throw new NotFoundException(__('Invalid race'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Race->delete()) {
			$this->Session->setFlash(__('Race deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Race was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
