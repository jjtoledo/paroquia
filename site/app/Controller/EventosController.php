<?php
App::uses('AppController', 'Controller');
/**
 * Eventos Controller
 *
 * @property Evento $Evento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class EventosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Flash', 'Session');

	public function afterFilter() {
        if ($this->action != 'index_login') {
            $this->autenticarAdmin();
        }
    }

    public function autenticarAdmin() {        
        if (!$this->Session->check('Admin')) {
            $this->redirect(array('controller' => 'admins',
                                    'action' => 'index_login'));
            exit();
        } 
    }

/**
 * index method
 *
 * @return void
 */
	public function index($id = null) {
		$options = array(
			'conditions' => array(
				'Evento.tipo' => 1,
				'Evento.comunidade_id' => $id
			)
		);
		$this->set('festa_pad', $this->Evento->find('all', $options));

		$options = array(
			'conditions' => array(
				'Evento.tipo' => 2,
				'Evento.comunidade_id' => $id
			)
		);
		$this->set('encontros', $this->Evento->find('all', $options));

		$options = array(
			'conditions' => array(
				'Evento.tipo' => 3,
				'Evento.comunidade_id' => $id
			)
		);
		$this->set('outros', $this->Evento->find('all', $options));

		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
		$this->set('comunidade', $this->Comunidade->find('first', $options));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null, $idcomunidade = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Evento inválido'));
		}
		$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
		$this->set('evento', $this->Evento->find('first', $options));

		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $idcomunidade));
		$this->set('comunidade', $this->Comunidade->find('first', $options));

		$this->set('id', $id);	
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null, $tipo = null) {
		$this->request->data['Evento']['comunidade_id'] = $id;
		$this->request->data['Evento']['tipo'] = $tipo;

		if ($this->request->is('post')) {
			$this->Evento->create();
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('Evento salvo com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $id));
			} else {
				$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
			}
		}
		
		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
		$this->set('comunidade', $this->Comunidade->find('first', $options));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idcomunidade = null) {
		if (!$this->Evento->exists($id)) {
			throw new NotFoundException(__('Invalid Evento'));
		}

		$this->request->data['Evento']['comunidade_id'] = $idcomunidade;
		
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Evento->save($this->request->data)) {
				$this->Session->setFlash(__('Evento salvo com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idcomunidade));
			} else {
				$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Evento.' . $this->Evento->primaryKey => $id));
			$this->request->data = $this->Evento->find('first', $options);
			
			$data = $this->request->data['Evento']['data'];
			$this->request->data['Evento']['data'] = date("d/m/Y", strtotime($data));
		}
		
		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $idcomunidade));
		$this->set('comunidade', $this->Comunidade->find('first', $options));

		$this->set('id', $id);
		$this->set('evento', $this->Evento->findById($id));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idcomunidade = null) {
		$this->Evento->id = $id;
		if (!$this->Evento->exists()) {
			throw new NotFoundException(__('Evento inválido'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Evento->delete()) {
			$this->Session->setFlash(__('Evento excluído com sucesso.'), 'success', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idcomunidade));
	}
}
