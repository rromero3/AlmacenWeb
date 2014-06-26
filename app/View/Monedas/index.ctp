<div class="monedas index">
	<h2><?php echo __('Monedas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('descripcion'); ?></th>
			<th><?php echo $this->Paginator->sort('dolar'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($monedas as $moneda): ?>
	<tr>
		<td><?php echo h($moneda['Moneda']['id']); ?>&nbsp;</td>
		<td><?php echo h($moneda['Moneda']['descripcion']); ?>&nbsp;</td>
		<td><?php echo h($moneda['Moneda']['dolar']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $moneda['Moneda']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $moneda['Moneda']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $moneda['Moneda']['id']), array(), __('Are you sure you want to delete # %s?', $moneda['Moneda']['id'])); ?>
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
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nueva Moneda'), array('action' => 'add')); ?></li>
	</ul>
</div>
