<?php
App::uses('AppModel', 'Model');
/**
 * Unidade Model
 *
 */
class Unidade extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'descripcion';

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Material' => array(
			'className' => 'Materiale',
			'foreignKey' => 'unidad_id',
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
