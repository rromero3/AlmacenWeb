<div class="monedas view">
<h2><?php echo __('Moneda'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descripcion'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['descripcion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cambio a 1 Dolar'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['dolar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($moneda['Moneda']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Moneda'), array('action' => 'edit', $moneda['Moneda']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Moneda'), array('action' => 'delete', $moneda['Moneda']['id']), array(), __('Are you sure you want to delete # %s?', $moneda['Moneda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Listar Monedas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Nueva Moneda'), array('action' => 'add')); ?> </li>
	</ul>
</div>
