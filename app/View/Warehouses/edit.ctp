<!-- File: /app/View/Warehouses/edit.ctp -->

<h1>Editar almacenes</h1>
<?php
echo $this->Form->create('Warehouse');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Guargar almacen');
?>