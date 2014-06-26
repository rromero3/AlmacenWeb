<div class="materiales index">
	<h2><?php echo __('Materiales'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('marca_id'); ?></th>
			<th><?php echo $this->Paginator->sort('familia_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unidad_id'); ?></th>
			<th><?php echo $this->Paginator->sort('habilitado'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('saldo_inicial'); ?></th>
			<th><?php echo $this->Paginator->sort('codigo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($materiales as $materiale): ?>
	<tr>
		<td><?php echo h($materiale['Materiale']['id']); ?>&nbsp;</td>
		<td><?php echo h($materiale['Materiale']['nombre']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($materiale['Marca']['nombre'], array('controller' => 'marcas', 'action' => 'view', $materiale['Marca']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($materiale['Familia']['nombre'], array('controller' => 'familias', 'action' => 'view', $materiale['Familia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($materiale['Unidad']['descripcion'], array('controller' => 'unidades', 'action' => 'view', $materiale['Unidad']['id'])); ?>
		</td>
		<td><?php 
		if ($materiale['Materiale']['habilitado'] == "1")
			{
				// material esta habilitado
				echo __('Si');
			}
			else
			{
				echo __('No');
			}
		 ?>&nbsp;</td>
		<td><?php echo h($materiale['Materiale']['foto']); ?>&nbsp;</td>
		<td><?php echo h($materiale['Materiale']['saldo_inicial']); ?>&nbsp;</td>
		<td><?php echo h($materiale['Materiale']['codigo']); ?>&nbsp;</td>
		<td><?php echo h($materiale['Materiale']['created']); ?>&nbsp;</td>
		<td><?php echo h($materiale['Materiale']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $materiale['Materiale']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $materiale['Materiale']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $materiale['Materiale']['id']), array(), __('Are you sure you want to delete # %s?', $materiale['Materiale']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Materiale'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Marcas'), array('controller' => 'marcas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Marca'), array('controller' => 'marcas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias'), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia'), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Unidades'), array('controller' => 'unidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unidad'), array('controller' => 'unidades', 'action' => 'add')); ?> </li>
	</ul>
</div>
