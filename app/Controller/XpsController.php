<?php
App::uses('AppController', 'Controller');
/**
 * Xps Controller
 *
 * @property Xp $Xp
 */
class XpsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Xp->recursive = 0;
		$this->set('xps', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Xp->exists($id)) {
			throw new NotFoundException(__('Invalid xp'));
		}
		$options = array('conditions' => array('Xp.' . $this->Xp->primaryKey => $id));
		$this->set('xp', $this->Xp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Xp->create();
			if ($this->Xp->save($this->request->data)) {
				$this->Session->setFlash(__('The xp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xp could not be saved. Please, try again.'));
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
		if (!$this->Xp->exists($id)) {
			throw new NotFoundException(__('Invalid xp'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Xp->save($this->request->data)) {
				$this->Session->setFlash(__('The xp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Xp.' . $this->Xp->primaryKey => $id));
			$this->request->data = $this->Xp->find('first', $options);
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
		$this->Xp->id = $id;
		if (!$this->Xp->exists()) {
			throw new NotFoundException(__('Invalid xp'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Xp->delete()) {
			$this->Session->setFlash(__('Xp deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Xp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Xp->recursive = 0;
		$this->set('xps', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Xp->exists($id)) {
			throw new NotFoundException(__('Invalid xp'));
		}
		$options = array('conditions' => array('Xp.' . $this->Xp->primaryKey => $id));
		$this->set('xp', $this->Xp->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Xp->create();
			if ($this->Xp->save($this->request->data)) {
				$this->Session->setFlash(__('The xp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xp could not be saved. Please, try again.'));
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
		if (!$this->Xp->exists($id)) {
			throw new NotFoundException(__('Invalid xp'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Xp->save($this->request->data)) {
				$this->Session->setFlash(__('The xp has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The xp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Xp.' . $this->Xp->primaryKey => $id));
			$this->request->data = $this->Xp->find('first', $options);
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
		$this->Xp->id = $id;
		if (!$this->Xp->exists()) {
			throw new NotFoundException(__('Invalid xp'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Xp->delete()) {
			$this->Session->setFlash(__('Xp deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Xp was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
