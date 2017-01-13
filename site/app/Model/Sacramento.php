<?php
App::uses('AppModel', 'Model');
/**
 * Sacramento Model
 *
 * @property Comunidade $Comunidade
 */
class Sacramento extends AppModel {


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
