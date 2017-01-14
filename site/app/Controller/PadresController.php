<?php
App::uses('AppController', 'Controller');
/**
 * Padres Controller
 *
 * @property Padre $Padre
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PadresController extends AppController {

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
		$this->Padre->recursive = 0;
		$this->set('padres', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Padre->exists($id)) {
			throw new NotFoundException(__('Invalid padre'));
		}
		$options = array('conditions' => array('Padre.' . $this->Padre->primaryKey => $id));
		$this->set('padre', $this->Padre->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Padre->create();
			if ($this->Padre->save($this->request->data)) {
				$this->Session->setFlash(__('The padre has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The padre could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$comunidades = $this->Padre->Comunidade->find('list');
		$this->set(compact('comunidades'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Padre->exists($id)) {
			throw new NotFoundException(__('Invalid padre'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Padre->save($this->request->data)) {
				$this->Session->setFlash(__('The padre has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The padre could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Padre.' . $this->Padre->primaryKey => $id));
			$this->request->data = $this->Padre->find('first', $options);
		}
		$comunidades = $this->Padre->Comunidade->find('list');
		$this->set(compact('comunidades'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Padre->id = $id;
		if (!$this->Padre->exists()) {
			throw new NotFoundException(__('Invalid padre'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Padre->delete()) {
			$this->Session->setFlash(__('The padre has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The padre could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
