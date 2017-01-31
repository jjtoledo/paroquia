<?php
App::uses('AppController', 'Controller');
/**
 * FotoComunidades Controller
 *
 * @property FotoComunidade $FotoComunidade
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FotoComunidadesController extends AppController {

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
		$this->Paginator->settings = array(
			'conditions' => array(
				'FotoComunidade.comunidade_id' => $id
			),
			'order' => array(
				'FotoComunidade.id' => 'DESC'
			)
		);
		$this->set('fotoComunidades', $this->Paginator->paginate());

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
	public function view($id = null, $idComunidade = null) {
		if (!$this->FotoComunidade->exists($id)) {
			throw new NotFoundException(__('Invalid Foto'));
		}
		$options = array('conditions' => array('FotoComunidade.' . $this->FotoComunidade->primaryKey => $id));
		$this->set('fotoComunidade', $this->FotoComunidade->find('first', $options));

		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $idComunidade));
		$this->set('comunidade', $this->Comunidade->find('first', $options));

		$this->set('id', $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		$this->request->data['FotoComunidade']['comunidade_id'] = $id;
		
		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
		$this->set('comunidade', $this->Comunidade->find('first', $options));

		$photo = array();
		if ($this->request->is('post')) {				
			for ($i=0; $i < sizeof($this->request->data['FotoComunidade']['fotos']); $i++) { 
				$photo = array('FotoComunidade' => 
							array('comunidade_id' => $this->request->data['FotoComunidade']['comunidade_id'],
									'foto' => $this->request->data['FotoComunidade']['fotos'][$i]));
				$this->FotoComunidade->create();			
				if (!$this->FotoComunidade->save($photo)) {
					//debug($this->request->data['FotoComunidade']['fotos']);
					$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
				}
			}
			$this->Session->setFlash(__('Fotos salvas com sucesso.'), 'success', array('class' => '	alert alert-success'));
			return $this->redirect(array('action' => 'index', $id));
		}

	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null, $idComunidade = null) {
		if (!$this->FotoComunidade->exists($id)) {
			throw new NotFoundException(__('Foto inválida'));
		}

		$this->request->data['FotoComunidade']['comunidade_id'] = $idComunidade;

		if ($this->request->is(array('post', 'put'))) {
			if ($this->FotoComunidade->save($this->request->data)) {
				$this->Session->setFlash(__('Foto salva com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idComunidade));
			} else {
				$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idComunidade = null) {
		$this->FotoComunidade->id = $id;
		if (!$this->FotoComunidade->exists()) {
			throw new NotFoundException(__('Foto inválida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FotoComunidade->delete()) {
			$this->Session->setFlash(__('Foto exluída com sucesso.'), 'success', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idComunidade));
	}
}
