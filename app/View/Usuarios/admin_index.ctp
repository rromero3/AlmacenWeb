<div class="usuarios index">
	<h2><?php echo __('Usuarios'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('ci'); ?></th>
			<th><?php echo $this->Paginator->sort('emitido_en'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono2'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('genero'); ?></th>
			<th><?php echo $this->Paginator->sort('habilitado'); ?></th>
			<th><?php echo $this->Paginator->sort('pass'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('foto'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($usuarios as $usuario): ?>
	<tr>
		<td><?php echo h($usuario['Usuario']['id']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fecha_nac']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['ci']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['emitido_en']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['cargo']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['telefono2']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['celular']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['fax']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['genero']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['habilitado']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['pass']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['foto']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['modified']); ?>&nbsp;</td>
		<td><?php echo h($usuario['Usuario']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Obras'), array('controller' => 'obras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obra'), array('controller' => 'obras', 'action' => 'add')); ?> </li>
	</ul>
</div>
