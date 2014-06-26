<?php
App::uses('AppController', 'Controller');
/**
 * Frentes Controller
 *
 * @property Frente $Frente
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class FrentesController extends AppController {

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
		$this->Frente->recursive = 0;
		$this->set('frentes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Frente->exists($id)) {
			throw new NotFoundException(__('Invalid frente'));
		}
		$options = array('conditions' => array('Frente.' . $this->Frente->primaryKey => $id));
		$this->set('frente', $this->Frente->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Frente->create();
			if ($this->Frente->save($this->request->data)) {
				$this->Session->setFlash(__('The frente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frente could not be saved. Please, try again.'));
			}
		}
		$obras = $this->Frente->Obra->find('list');
		$usuarios = $this->Frente->Usuario->find('list');
		$this->set(compact('obras', 'usuarios'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Frente->exists($id)) {
			throw new NotFoundException(__('Invalid frente'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Frente->save($this->request->data)) {
				$this->Session->setFlash(__('The frente has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The frente could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Frente.' . $this->Frente->primaryKey => $id));
			$this->request->data = $this->Frente->find('first', $options);
		}
		$obras = $this->Frente->Obra->find('list');
		$usuarios = $this->Frente->Usuario->find('list');
		$this->set(compact('obras', 'usuarios'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Frente->id = $id;
		if (!$this->Frente->exists()) {
			throw new NotFoundException(__('Invalid frente'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Frente->delete()) {
			$this->Session->setFlash(__('The frente has been deleted.'));
		} else {
			$this->Session->setFlash(__('The frente could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
