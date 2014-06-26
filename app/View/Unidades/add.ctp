<div class="unidades form">
<?php echo $this->Form->create('Unidade'); ?>
	<fieldset>
		<legend><?php echo __('Add Unidade'); ?></legend>
	<?php
		echo $this->Form->input('descripcion');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Unidades'), array('action' => 'index')); ?></li>
	</ul>
</div>
