<?php
App::uses('AppController', 'Controller');
/**
 * Pastorals Controller
 *
 * @property Pastoral $Pastoral
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PastoralsController extends AppController {

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
				'Pastoral.comunidade_id' => $id
			)
		);
		$this->set('pastorals', $this->Paginator->paginate());

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
	public function view($id = null, $idCity = null) {
		if (!$this->Pastoral->exists($id)) {
			throw new NotFoundException(__('Invalid Pastoral'));
		}
		$options = array('conditions' => array('Pastoral.' . $this->Pastoral->primaryKey => $id));
		$this->set('pastoral', $this->Pastoral->find('first', $options));

		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $idCity));
		$this->set('comunidade', $this->Comunidade->find('first', $options));

		$this->set('id', $id);	
	}

/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {
		$this->request->data['Pastoral']['comunidade_id'] = $id;

		if ($this->request->is('post')) {
			$this->Pastoral->create();
			if ($this->Pastoral->save($this->request->data)) {
				$this->Session->setFlash(__('Pastoral salva com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $id));
			} else {
				$this->Session->setFlash(__('The Pastoral could not be saved. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
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
	public function edit($id = null, $idCity = null) {
		if (!$this->Pastoral->exists($id)) {
			throw new NotFoundException(__('Invalid Pastoral'));
		}

		$this->set('pastoral', $this->Pastoral->findById($id));

		$this->request->data['Pastoral']['comunidade_id'] = $idCity;

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pastoral->save($this->request->data)) {
				$this->Session->setFlash(__('Pastoral salva com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index', $idCity));
			} else {
				$this->Session->setFlash(__('The Pastoral could not be saved. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Pastoral.' . $this->Pastoral->primaryKey => $id));
			$this->request->data = $this->Pastoral->find('first', $options);
		}
		
		$this->loadModel('Comunidade');
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $idCity));
		$this->set('comunidade', $this->Comunidade->find('first', $options));

		$this->set('id', $id);
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null, $idCity = null) {
		$this->Pastoral->id = $id;
		if (!$this->Pastoral->exists()) {
			throw new NotFoundException(__('Invalid Pastoral'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pastoral->delete()) {
			$this->Session->setFlash(__('Pastoral excluída com sucesso.'), 'success', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The Pastoral could not be deleted. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index', $idCity));
	}
}
