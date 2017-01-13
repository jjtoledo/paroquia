<?php
App::uses('AppModel', 'Model');
/**
 * Padre Model
 *
 * @property Comunidade $Comunidade
 */
class Padre extends AppModel {


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
}
