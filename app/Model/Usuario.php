<?php
App::uses('AppModel', 'Model');
/**
 * Usuario Model
 *
 * @property Obra $Obra
 */
class Usuario extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombreCompleto';

public $virtualFields = array(
    'nombreCompleto' => "CONCAT(nombres, ' ', apellidos)"
);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Obra' => array(
			'className' => 'Obra',
			'foreignKey' => 'usuario_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
