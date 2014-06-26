<div class="materiales form">
<?php echo $this->Form->create('Materiale'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Materiale'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('marca_id');
		echo $this->Form->input('familia_id');
		echo $this->Form->input('unidad_id');
		echo $this->Form->input('habilitado');
		echo $this->Form->input('foto');
		echo $this->Form->input('saldo_inicial');
		echo $this->Form->input('codigo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Materiales'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad'), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
