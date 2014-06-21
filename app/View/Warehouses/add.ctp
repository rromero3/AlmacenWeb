<!-- File: /app/View/Warehouses/add.ctp -->

<h1>Agregar almacen</h1>
<?php
echo $this->Form->create('Warehouse');
echo $this->Form->input('name');
echo $this->Form->input('description', array('rows' => '3'));
echo $this->Form->end('Guardar Almacen');
?>