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

        $this->common();        

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
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

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function evento($id = null) {
        $this->loadModel('Evento');

        $evento = $this->Evento->findById($id);
        $this->set(compact('evento'));

        $this->common();

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function pdfs() {
        $this->loadModel('Pdf');

        $options = array(
            'order' => 'id DESC'
        );
        
        $pdfs = $this->Pdf->find('all', $options);
        $this->set(compact('pdfs'));

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function padresediacono() {
        $this->loadModel('Padre');
        
        $padres = $this->Padre->find('all');
        $this->set(compact('padres'));

        $this->common();

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function comunidades() {
        $this->loadModel('Comunidade');
        
        $comunidades = $this->Comunidade->find('all');
        $this->set(compact('comunidades'));

        $this->common();

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function comunidade($id = null) {
        $this->loadModel('Comunidade');
        
        $comunidade = $this->Comunidade->findById($id);
        $this->set(compact('comunidade'));

        $this->loadModel('FotoComunidade');
        $fotos_com = $this->FotoComunidade->find('all');
        $this->set(compact('fotos_com'));

        $this->common();

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function sacramentos() {
        $this->loadModel('Sacramento');
        
        $sacramentos = $this->Sacramento->find('all');
        $this->set(compact('sacramentos'));

        $this->common();

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function pastoraisemov() {
        $this->loadModel('Pastoral');
        
        $pastorals = $this->Pastoral->find('all');
        $this->set(compact('pastorals'));

        $this->common();

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function fale_conosco() {
        $this->common();

        if ($this->request->is('post')) {
            $Email = new CakeEmail();
            $Email->config('smtp');
            $Email->replyTo(array($this->data['Contato']['email'] => $this->data['Contato']['nome']))
                ->sender(array($this->data['Contato']['email'] => $this->data['Contato']['nome']))
                ->to('contato@portalmediopiracicaba.com')
                ->subject($this->data['Contato']['assunto'])
                ->message($this->data['Contato']['mensagem']);
            
            if ($Email->send()) {
                $this->Session->setFlash(__('E-mail enviado com sucesso! Em breve entraremos em contato.'), 'default', array('class' => 'contato alert alert-success'));
            } else {
                $this->Session->setFlash(__('E-mail não enviado, tente novamente mais tarde...'), 'default', array('class' => 'contato alert alert-danger'));
            }           
            $this->redirect(array('action' => 'fale_conosco'));
        }

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function visitas() {
        $this->common();

        if ($this->request->is('post')) {
            $Email = new CakeEmail();
            $Email->config('smtp');
            $Email->replyTo(array($this->data['Contato']['email'] => $this->data['Contato']['nome']))
                ->sender(array($this->data['Contato']['email'] => $this->data['Contato']['nome']))
                ->to('contato@portalmediopiracicaba.com')
                ->subject('Agendamento de visita')
                ->message($this->data['Contato']['endereco'] . ' - ' .$this->data['Contato']['mensagem']);
            
            if ($Email->send()) {
                $this->Session->setFlash(__('Agendamento de visita enviado com sucesso! Em breve entraremos em contato.'), 'default', array('class' => 'contato alert alert-success'));
            } else {
                $this->Session->setFlash(__('E-mail não enviado, tente novamente mais tarde...'), 'default', array('class' => 'contato alert alert-danger'));
            }           
            $this->redirect(array('action' => 'visitas'));
        }

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }

    public function dizimo() {
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

    public function buscar($busca = null) {
        $this->common();

        $this->loadModel('Pdf');
        $this->loadModel('Padre');
        $this->loadModel('Evento');
        $this->loadModel('Pastoral');
        $this->loadModel('Comunidade');
        $this->loadModel('Sacramento');

        $search = "%" . $busca . "%";
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

        $options = array(
            'conditions' => array(
                'Pdf.pdf LIKE' => $search
            )
        );

        $results_pdf = $this->Pdf->find('all', $options);
        $this->set('results_pdf', $results_pdf);

        $options = array(
            'conditions' => array(
                'Padre.nome LIKE' => $search
            )
        );

        $results_padre = $this->Padre->find('all', $options);
        $this->set('results_padre', $results_padre);

        $options = array(
            'conditions' => array(
                'Pastoral.nome LIKE' => $search
            )
        );

        $results_past = $this->Pastoral->find('all', $options);
        $this->set('results_past', $results_past);

        $options = array(
            'conditions' => array(
                'Sacramento.nome LIKE' => $search
            )
        );

        $results_sac = $this->Sacramento->find('all', $options);
        $this->set('results_sac', $results_sac);

        if(isset($this->params['url']['search'])) {  
            $this->redirect(array('action' => 'buscar', $this->params['url']['search']));
        }
    }
}
