<?php
App::uses('AppModel', 'Model');
/**
 * Materiale Model
 *
 * @property Marca $Marca
 * @property Familia $Familia
 * @property Unidad $Unidad
 */
class Materiale extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'nombre';

/**
 * Virtual fields
 *
 * @var string
 */
public $virtualFields = array(
    'nombreCompleto' => "CONCAT(Materiale.codigo, ' ', Materiale.nombre)"
);

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'codigo' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Marca' => array(
			'className' => 'Marca',
			'foreignKey' => 'marca_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'familia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Unidad' => array(
			'className' => 'Unidade',
			'foreignKey' => 'unidad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
