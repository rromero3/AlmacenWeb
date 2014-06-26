<?php
class Obra extends AppModel {
     public $belongsTo = array(
        'Responsable' => array(
            'className' => 'Usuario',
            'foreignKey' => 'usuario_id'
        )
    );
}
?>