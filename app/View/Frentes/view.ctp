<div class="frentes view">
<h2><?php echo __('Frente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($frente['Frente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Obra'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frente['Obra']['id'], array('controller' => 'obras', 'action' => 'view', $frente['Obra']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo $this->Html->link($frente['Usuario']['nombreCompleto'], array('controller' => 'usuarios', 'action' => 'view', $frente['Usuario']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habilitado'); ?></dt>
		<dd>
			<?php echo h($frente['Frente']['habilitado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($frente['Frente']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($frente['Frente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($frente['Frente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Frente'), array('action' => 'edit', $frente['Frente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Frente'), array('action' => 'delete', $frente['Frente']['id']), array(), __('Are you sure you want to delete # %s?', $frente['Frente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Frentes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Frente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras'), array('controller' => 'obras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obra'), array('controller' => 'obras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('controller' => 'usuarios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
	</ul>
</div>
