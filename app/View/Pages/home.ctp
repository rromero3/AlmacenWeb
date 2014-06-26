<?php
/**
 *
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 */

if (!Configure::read('debug')):
	throw new NotFoundException();
endif;

App::uses('Debugger', 'Utility');
?>
<h3><?php echo __d('cake_dev', 'Empro Almacen V1.0'); ?> </h3>
<p>
<?php echo __d('cake_dev', 'Seleccione la opcion que quiere agregar o editar:'); ?>
</p>
<div style="float:left">
<ul>
<li><?php echo $this->Html->link
	('Almacenes',
      array(
      	'controller' => 'almacenes', 
      	'action' => 'index')); ?></li>
<li><?php echo $this->Html->link
	('Usuarios',
      array(
      	'controller' => 'usuarios', 
      	'action' => 'index')); ?></li>
    <li>
	<?php echo $this->Html->link
	('Obras',
      array(
      	'controller' => 'obras', 
      	'action' => 'index')); ?>
    </li>
    <li>
	<?php echo $this->Html->link
	('Familias',
      array(
      	'controller' => 'familias', 
      	'action' => 'index')); ?>
    </li>
    <li>
	<?php echo $this->Html->link
	('Unidades',
      array(
      	'controller' => 'unidades', 
      	'action' => 'index')); ?>
    </li>
     <li>
	<?php echo $this->Html->link
	('Marcas',
      array(
      	'controller' => 'marcas', 
      	'action' => 'index')); ?>
    </li>
	<li>
	<?php echo $this->Html->link
	('Monedas',
      array(
      	'controller' => 'monedas', 
      	'action' => 'index')); ?>
    </li>
    <li>
	<?php echo $this->Html->link
	('Obras',
      array(
      	'controller' => 'obras', 
      	'action' => 'index')); ?>
    </li>
    <li>
	<?php echo $this->Html->link
	('Frentes',
      array(
      	'controller' => 'frentes', 
      	'action' => 'index')); ?>
    </li>
</ul>
</div>

<div style="float:right">
<ul>
<li>
	<?php echo $this->Html->link
	('Materiales',
      array(
      	'controller' => 'materiales', 
      	'action' => 'index')); ?>
    </li>
</ul>
</div>


