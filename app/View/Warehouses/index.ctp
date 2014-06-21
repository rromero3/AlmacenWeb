<!-- File: /app/View/Warehouses/index.ctp -->

<h1>Almacenes</h1>
<table>
    <tr>
        <th>Identificador</th>
        <th>Nombre</th>
        <th>Acciones</th>
        <th>Creado en</th>        
        <th>Modificado en</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($warehouses as $warehouse): ?>
    <tr>
        <td><?php echo $warehouse['Warehouse']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($warehouse['Warehouse']['name'],
array('controller' => 'warehouses', 'action' => 'view', $warehouse['Warehouse']['id'])); ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Editar',
                    array('action' => 'edit', $warehouse['Warehouse']['id'])
                );
               ?>
            
                <?php
                
                echo $this->Form->postLink(
                    'Borrar',
                    array('action' => 'delete', $warehouse['Warehouse']['id']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
        <td><?php echo $warehouse['Warehouse']['created']; ?></td>
        
        <td><?php echo $warehouse['Warehouse']['modified']; ?></td>
    </tr>
    <?php endforeach; ?>
    
   
    
    <?php unset($warehouse); ?>
</table>

 <?php echo $this->Html->link(
    'Agregar almacen',
    array('controller' => 'warehouses', 'action' => 'add')
); ?>