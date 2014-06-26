<div class="proveedores view">
<h2><?php echo __('Proveedore'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($proveedore['Proveedore']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Proveedore'), array('action' => 'edit', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Proveedore'), array('action' => 'delete', $proveedore['Proveedore']['id']), array(), __('Are you sure you want to delete # %s?', $proveedore['Proveedore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Proveedores'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proveedore'), array('action' => 'add')); ?> </li>
	</ul>
</div>
