<?php
App::uses('AppController', 'Controller');
/**
 * Comunidades Controller
 *
 * @property Comunidade $Comunidade
 * @property PaginatorComponent $Paginator
 */
class ComunidadesController extends AppController {

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
	public function index() {
		$this->Comunidade->recursive = 0;
		$this->set('comunidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Comunidade->exists($id)) {
			throw new NotFoundException(__('Invalid comunidade'));
		}
		$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
		$this->set('comunidade', $this->Comunidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Comunidade->create();
			if ($this->Comunidade->save($this->request->data)) {
				$this->Session->setFlash(__('Comunidade salva com sucesso.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunidade could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Comunidade->exists($id)) {
			throw new NotFoundException(__('Invalid comunidade'));
		}

		$this->set('comunidade', $this->Comunidade->findById($id));

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Comunidade->save($this->request->data)) {
				$this->Session->setFlash(__('Comunidade salva com sucesso.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comunidade could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Comunidade.' . $this->Comunidade->primaryKey => $id));
			$this->request->data = $this->Comunidade->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Comunidade->id = $id;
		if (!$this->Comunidade->exists()) {
			throw new NotFoundException(__('Invalid comunidade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Comunidade->delete()) {
			$this->Session->setFlash(__('Comunidade excluída com sucesso.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The comunidade could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete_foto($id = null, $idCity = null) {
		$this->Comunidade->id = $id;
		if (!$this->Comunidade->exists()) {
			throw new NotFoundException(__('Invalid Comunidade'));
		}
		
		$this->Comunidade->updateAll(array('foto_padroeiro' => null), array('Comunidade.id' => $id));
		return $this->redirect(array('action' => 'view', $id));
	}
}
