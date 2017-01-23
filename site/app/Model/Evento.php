<?php
App::uses('AppModel', 'Model');
/**
 * Evento Model
 *
 * @property Comunidade $Comunidade
 */
class Evento extends AppModel {


	// The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Comunidade' => array(
			'className' => 'Comunidade',
			'foreignKey' => 'comunidade_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'FotoEvento' => array(
			'className' => 'FotoEvento',
			'foreignKey' => 'evento_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => true,
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
}
