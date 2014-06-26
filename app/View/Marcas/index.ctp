<div class="marcas index">
	<h2><?php echo __('Marcas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($marcas as $marca): ?>
	<tr>
		<td><?php echo h($marca['Marca']['id']); ?>&nbsp;</td>
		<td><?php echo h($marca['Marca']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($marca['Marca']['modified']); ?>&nbsp;</td>
		<td><?php echo h($marca['Marca']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $marca['Marca']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $marca['Marca']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $marca['Marca']['id']), array(), __('Are you sure you want to delete # %s?', $marca['Marca']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Marca'), array('action' => 'add')); ?></li>
	</ul>
</div>
