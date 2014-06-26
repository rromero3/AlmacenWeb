<div class="proveedores form">
<?php echo $this->Form->create('Proveedore'); ?>
	<fieldset>
		<legend><?php echo __('Edit Proveedore'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('fax');
		echo $this->Form->input('celular');
		echo $this->Form->input('email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Proveedore.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Proveedore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?></li>
	</ul>
</div>
