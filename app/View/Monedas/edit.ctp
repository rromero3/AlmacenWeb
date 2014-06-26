<div class="monedas form">
<?php echo $this->Form->create('Moneda'); ?>
	<fieldset>
		<legend><?php echo __('Editar Moneda'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('dolar');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Moneda.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Moneda.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Listar Monedas'), array('action' => 'index')); ?></li>
	</ul>
</div>
