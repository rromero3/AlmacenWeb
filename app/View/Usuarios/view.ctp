<div class="usuarios view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombres'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['nombres']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellidos'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['apellidos']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nac'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fecha_nac']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ci'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['ci']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emitido En'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['emitido_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cargo'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['cargo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono2'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['telefono2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Genero'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['genero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Habilitado'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['habilitado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pass'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['pass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['foto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($usuario['Usuario']['created']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Usuario'), array('action' => 'edit', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Usuario'), array('action' => 'delete', $usuario['Usuario']['id']), array(), __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Usuarios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Usuario'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Obras'), array('controller' => 'obras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Obra'), array('controller' => 'obras', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Obras'); ?></h3>
	<?php if (!empty($usuario['Obra'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Ubicacion'); ?></th>
		<th><?php echo __('Habilitado'); ?></th>
		<th><?php echo __('Fec Inicio'); ?></th>
		<th><?php echo __('Fec Fin'); ?></th>
		<th><?php echo __('Usuario Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usuario['Obra'] as $obra): ?>
		<tr>
			<td><?php echo $obra['id']; ?></td>
			<td><?php echo $obra['nombre']; ?></td>
			<td><?php echo $obra['ubicacion']; ?></td>
			<td><?php echo $obra['habilitado']; ?></td>
			<td><?php echo $obra['fec_inicio']; ?></td>
			<td><?php echo $obra['fec_fin']; ?></td>
			<td><?php echo $obra['usuario_id']; ?></td>
			<td><?php echo $obra['created']; ?></td>
			<td><?php echo $obra['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'obras', 'action' => 'view', $obra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'obras', 'action' => 'edit', $obra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'obras', 'action' => 'delete', $obra['id']), array(), __('Are you sure you want to delete # %s?', $obra['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Obra'), array('controller' => 'obras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
