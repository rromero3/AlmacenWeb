<div class="usuarios form">
<?php echo $this->Form->create('Usuario'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Usuario'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombres');
		echo $this->Form->input('apellidos');
		echo $this->Form->input('fecha_nac');
		echo $this->Form->input('ci');
		echo $this->Form->input('emitido_en');
		echo $this->Form->input('cargo');
		echo $this->Form->input('telefono');
		echo $this->Form->input('telefono2');
		echo $this->Form->input('celular');
		echo $this->Form->input('fax');
		echo $this->Form->input('email');
		echo $this->Form->input('genero');
		echo $this->Form->input('habilitado');
		echo $this->Form->input('pass');
		echo $this->Form->input('direccion');
		echo $this->Form->input('foto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Usuario.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Usuario.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Obras'), array('controller' => 'obras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obra'), array('controller' => 'obras', 'action' => 'add')); ?> </li>
	</ul>
</div>
