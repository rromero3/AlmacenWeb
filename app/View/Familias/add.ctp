<div class="familias form">
<?php echo $this->Form->create('Familia'); ?>
	<fieldset>
		<legend><?php echo __('Add Familia'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Familias'), array('action' => 'index')); ?></li>
	</ul>
</div>
