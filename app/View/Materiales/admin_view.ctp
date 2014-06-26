<div class="materiales view">
<h2><?php echo __('Materiale'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marca'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materiale['Marca']['nombre'], array('controller' => 'marcas', 'action' => 'view', $materiale['Marca']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familia'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materiale['Familia']['nombre'], array('controller' => 'familias', 'action' => 'view', $materiale['Familia']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unidad'); ?></dt>
		<dd>
			<?php echo $this->Html->link($materiale['Unidad']['descripcion'], array('controller' => 'unidades', 'action' => 'view', $materiale['Unidad']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habilitado'); ?></dt>
		<dd>
			<?php 
			if ($materiale['Materiale']['habilitado'] == "1")
			{
				// material esta habilitado
				echo __('Si');
			}
			else
			{
				echo __('No');
			}
			 ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saldo Inicial'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['saldo_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Codigo'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['codigo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($materiale['Materiale']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Materiale'), array('action' => 'edit', $materiale['Materiale']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Materiale'), array('action' => 'delete', $materiale['Materiale']['id']), array(), __('Are you sure you want to delete # %s?', $materiale['Materiale']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Materiales'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Materiale'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad'), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
