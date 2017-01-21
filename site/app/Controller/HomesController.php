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


        $this->loadModel('Evento');
        $options = array(
            'order' => 'data DESC',
            'limit' => 6
        );
        $eventos = $this->Evento->find('all', $options);
        $this->set(compact('eventos'));

        $this->loadModel('FotoEvento');
        $fotos_ev = array();
        foreach ($eventos as $e) {
            $options = array(
                'conditions' => array(
                    'FotoEvento.evento_id' => $e['Evento']['id']
                ),
                'limit' => 1
            );
            array_push($fotos_ev, $this->FotoEvento->find('first', $options));
        }
        $this->set(compact('fotos_ev'));
    }

    public function eventos() {        
        
        $this->loadModel('Evento');
        $options = array(
            'order' => 'data DESC',
            'limit' => 6
        );
        $eventos = $this->Evento->find('all', $options);
        $this->set(compact('eventos'));

        $this->loadModel('FotoEvento');
        $fotos_ev = array();
        foreach ($eventos as $e) {
            $options = array(
                'conditions' => array(
                    'FotoEvento.evento_id' => $e['Evento']['id']
                ),
                'limit' => 1
            );
            array_push($fotos_ev, $this->FotoEvento->find('first', $options));
        }
        $this->set(compact('fotos_ev'));
    }
}
