<div class="familias view">
<h2><?php echo __('Familia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($familia['Familia']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Familia'), array('action' => 'edit', $familia['Familia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Familia'), array('action' => 'delete', $familia['Familia']['id']), array(), __('Are you sure you want to delete # %s?', $familia['Familia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('action' => 'add')); ?> </li>
	</ul>
</div>
