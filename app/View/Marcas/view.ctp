<div class="marcas view">
<h2><?php echo __('Marca'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($marca['Marca']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Marca'), array('action' => 'edit', $marca['Marca']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Marca'), array('action' => 'delete', $marca['Marca']['id']), array(), __('Are you sure you want to delete # %s?', $marca['Marca']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('action' => 'add')); ?> </li>
	</ul>
</div>
