<?php
App::uses('AppController', 'Controller');
/**
 * Familias Controller
 *
 * @property Familia $Familia
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FamiliasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Familia->recursive = 0;
		$this->set('familias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Familia->exists($id)) {
			throw new NotFoundException(__('Invalid familia'));
		}
		$options = array('conditions' => array('Familia.' . $this->Familia->primaryKey => $id));
		$this->set('familia', $this->Familia->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Familia->create();
			if ($this->Familia->save($this->request->data)) {
				$this->Session->setFlash(__('The familia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The familia could not be saved. Please, try again.'));
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
		if (!$this->Familia->exists($id)) {
			throw new NotFoundException(__('Invalid familia'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Familia->save($this->request->data)) {
				$this->Session->setFlash(__('The familia has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The familia could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Familia.' . $this->Familia->primaryKey => $id));
			$this->request->data = $this->Familia->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Familia->id = $id;
		if (!$this->Familia->exists()) {
			throw new NotFoundException(__('Invalid familia'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Familia->delete()) {
			$this->Session->setFlash(__('The familia has been deleted.'));
		} else {
			$this->Session->setFlash(__('The familia could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
