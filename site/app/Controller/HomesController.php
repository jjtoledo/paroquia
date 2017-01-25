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
            'order' => 'data ASC',
            'limit' => 9
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

        $this->loadModel('Padre');
        $this->loadModel('Pastoral');
        $this->loadModel('Sacramento');
        $this->loadModel('Comunidade');
        $this->common();

        if(isset($this->params['url']['search'])) {  
            $search = "%" . $this->params['url']['search'] . "%";
            $options = array(
                'conditions' => array(
                    'Comunidade.nome LIKE' => $search
                )
            );

            $results_com = $this->Comunidade->find('all', $options);
            $this->set('results_com', $results_com);

            $options = array(
                'conditions' => array(
                    'Evento.nome LIKE' => $search
                )
            );

            $results_ev = $this->Evento->find('all', $options);
            $this->set('results_ev', $results_ev);  
        }
    }

    public function eventos($tipo = null) {        
        $this->loadModel('Evento');
        $this->loadModel('FotoEvento');
        
        if (is_null($tipo)) {
            $options = array(
                'order' => 'data DESC',
                'limit' => 18
            );
        } else {
            $options = array(
                'conditions' => array(
                    'Evento.tipo' => $tipo
                ),
                'order' => 'data DESC',
                //'limit' => 6
            );
            $this->set(compact('tipo'));
        }

        $eventos = $this->Evento->find('all', $options);
        $this->set(compact('eventos'));

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

        $this->common();   
    }

    public function evento($id = null) {
        $this->loadModel('Evento');

        $evento = $this->Evento->findById($id);
        $this->set(compact('evento'));

        $this->common();
    }

    public function pdfs() {
        $this->loadModel('Pdf');

        $options = array(
            'order' => 'id DESC'
        );
        
        $pdfs = $this->Pdf->find('all', $options);
        $this->set(compact('pdfs'));
    }

    public function padresediacono() {
        $this->loadModel('Padre');
        
        $padres = $this->Padre->find('all');
        $this->set(compact('padres'));

        $this->common();
    }

    public function comunidades() {
        $this->loadModel('Comunidade');
        
        $comunidades = $this->Comunidade->find('all');
        $this->set(compact('comunidades'));

        $this->common();
    }

    public function comunidade($id = null) {
        $this->loadModel('Comunidade');
        
        $comunidade = $this->Comunidade->findById($id);
        $this->set(compact('comunidade'));

        $this->loadModel('FotoComunidade');
        $fotos_com = $this->FotoComunidade->find('all');
        $this->set(compact('fotos_com'));

        $this->common();
    }

    public function sacramentos() {
        $this->loadModel('Sacramento');
        
        $sacramentos = $this->Sacramento->find('all');
        $this->set(compact('sacramentos'));

        $this->common();
    }

    public function pastoraisemov() {
        $this->loadModel('Pastoral');
        
        $pastorals = $this->Pastoral->find('all');
        $this->set(compact('pastorals'));

        $this->common();
    }

    public function fale_conosco() {
        $this->common();
    }

    public function visitas() {
        $this->common();
    }

    public function common() {
        $this->loadModel('Pdf');

        $options = array(
            'order' => 'id DESC',
            'limit' => 1
        );
        $pdf = $this->Pdf->find('all', $options);
        $this->set(compact('pdf'));
    }
}
