<div class="unidades view">
<h2><?php echo __('Unidade'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($unidade['Unidade']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unidade'), array('action' => 'edit', $unidade['Unidade']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unidade'), array('action' => 'delete', $unidade['Unidade']['id']), array(), __('Are you sure you want to delete # %s?', $unidade['Unidade']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidade'), array('action' => 'add')); ?> </li>
	</ul>
</div>
