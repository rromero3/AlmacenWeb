<!-- File: /app/View/Warehouses/view.ctp -->

<h1><?php echo h($warehouse['Warehouse']['name']); ?></h1>

<p><small>Creado en: <?php echo $warehouse['Warehouse']['created']; ?></small></p>

<p><?php echo h($warehouse['Warehouse']['description']); ?></p>