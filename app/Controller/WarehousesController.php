<?php

class WarehousesController extends AppController {
public $scaffold;
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->set('warehouses', $this->Warehouse->find('all'));
    }
    
     public function view($id = null) {
        if (!$id) {
            throw new NotFoundException(__('invalido'));
        }

        $warehouse = $this->Warehouse->findById($id);
        if (!$warehouse) {
            throw new NotFoundException(__('Invalido'));
        }
        $this->set('warehouse', $warehouse);
    }
    
     public function add() {
     	
     	/* check if its a post request*/
        if ($this->request->is('POST')) {
        
        
            $this->Warehouse->create();
            if ($this->Warehouse->save($this->request->data)) {
                $this->Session->setFlash(__('Almacen fue guardado.'));
                return $this->redirect(array('action' => 'index'));
            }
            $this->Session->setFlash(__('No es posible guardar un almacen.'));
        }
    }
    
    public function edit($id = null) {
    if (!$id) {
        throw new NotFoundException(__('Invalid post'));
    }

    $warehouse = $this->Warehouse->findById($id);
    if (!$warehouse) {
        throw new NotFoundException(__('Invalid post'));
    }

    if ($this->request->is(array('POST', 'PUT'))) {
        $this->Warehouse->id = $id;
        if ($this->Warehouse->save($this->request->data)) {
            $this->Session->setFlash(__('Your post has been updated.'));
            return $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Unable to update your post.'));
    }

    if (!$this->request->data) {
        $this->request->data = $warehouse;
    }
	}
	
   public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }

    if ($this->Warehouse->delete($id)) {
        $this->Session->setFlash(
            __('The post with id: %s has been deleted.', h($id))
        );
        return $this->redirect(array('action' => 'index'));
    }
}
}
?>