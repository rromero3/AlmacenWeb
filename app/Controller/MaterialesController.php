<?php
App::uses('AppController', 'Controller');
/**
 * Materiales Controller
 *
 * @property Materiale $Materiale
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class MaterialesController extends AppController {

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
		$this->Materiale->recursive = 0;
		$conditions = array();
		
		$this->Paginator->settings = array(
        'conditions' => array('Materiale.habilitado' => '1'),
        'limit' => 5
    );
		
		$this->set('materiales', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Materiale->exists($id)) {
			throw new NotFoundException(__('Invalid materiale'));
		}
		$options = array('conditions' => array('Materiale.' . $this->Materiale->primaryKey => $id));
		$this->set('materiale', $this->Materiale->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Materiale->create();
			if ($this->Materiale->save($this->request->data)) {
				$this->Session->setFlash(__('The materiale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The materiale could not be saved. Please, try again.'));
			}
		}
		$marcas = $this->Materiale->Marca->find('list');
		$familias = $this->Materiale->Familia->find('list');
		$unidads = $this->Materiale->Unidad->find('list');
		$this->set(compact('marcas', 'familias', 'unidads'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Materiale->exists($id)) {
			throw new NotFoundException(__('Invalid materiale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Materiale->save($this->request->data)) {
				$this->Session->setFlash(__('The materiale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The materiale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Materiale.' . $this->Materiale->primaryKey => $id));
			$this->request->data = $this->Materiale->find('first', $options);
		}
		$marcas = $this->Materiale->Marca->find('list');
		$familias = $this->Materiale->Familia->find('list');
		$unidads = $this->Materiale->Unidad->find('list');
		$this->set(compact('marcas', 'familias', 'unidads'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Materiale->id = $id;
		if (!$this->Materiale->exists()) {
			throw new NotFoundException(__('Invalid materiale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Materiale->delete()) {
			$this->Session->setFlash(__('The materiale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The materiale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Materiale->recursive = 0;
		$this->set('materiales', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Materiale->exists($id)) {
			throw new NotFoundException(__('Invalid materiale'));
		}
		$options = array('conditions' => array('Materiale.' . $this->Materiale->primaryKey => $id));
		$this->set('materiale', $this->Materiale->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Materiale->create();
			if ($this->Materiale->save($this->request->data)) {
				$this->Session->setFlash(__('The materiale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The materiale could not be saved. Please, try again.'));
			}
		}
		$marcas = $this->Materiale->Marca->find('list');
		$familias = $this->Materiale->Familia->find('list');
		$unidads = $this->Materiale->Unidad->find('list');
		$this->set(compact('marcas', 'familias', 'unidads'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Materiale->exists($id)) {
			throw new NotFoundException(__('Invalid materiale'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Materiale->save($this->request->data)) {
				$this->Session->setFlash(__('The materiale has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The materiale could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Materiale.' . $this->Materiale->primaryKey => $id));
			$this->request->data = $this->Materiale->find('first', $options);
		}
		$marcas = $this->Materiale->Marca->find('list');
		$familias = $this->Materiale->Familia->find('list');
		$unidads = $this->Materiale->Unidad->find('list');
		$this->set(compact('marcas', 'familias', 'unidads'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Materiale->id = $id;
		if (!$this->Materiale->exists()) {
			throw new NotFoundException(__('Invalid materiale'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Materiale->delete()) {
			$this->Session->setFlash(__('The materiale has been deleted.'));
		} else {
			$this->Session->setFlash(__('The materiale could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
