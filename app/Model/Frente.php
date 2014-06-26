<?php
App::uses('AppModel', 'Model');
/**
 * Frente Model
 *
 * @property Obra $Obra
 * @property Usuario $Usuario
 */
class Frente extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Obra' => array(
			'className' => 'Obra',
			'foreignKey' => 'obra_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Usuario' => array(
			'className' => 'Usuario',
			'foreignKey' => 'usuario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
