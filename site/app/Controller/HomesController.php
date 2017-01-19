<?php
App::uses('AppController', 'Controller');
/**
 * Homes Controller
 *
 * @property Home $Home
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class HomesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function index() {        
        $this->loadModel('FotoComunidade');
        $options = array(
            'order' => 'rand()',
            'limit' => 6
        );
        $fotos_com = $this->FotoComunidade->find('all', $options);
        $this->set(compact('fotos_com'));

        $this->loadModel('FotoEvento');
        $options = array(
            'order' => 'rand()',
            'limit' => 4
        );
        $fotos_ev = $this->FotoEvento->find('all', $options);
        $this->set(compact('fotos_ev'));
    }
}
