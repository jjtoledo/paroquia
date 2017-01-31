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
			throw new NotFoundException(__('Padre inválido.'));
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
				$this->Session->setFlash(__('Padre / Diácono salvo com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The padre could not be saved. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
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
		if (!$this->Padre->exists($id)) {
			throw new NotFoundException(__('Invalid padre'));
		}

		$this->set('padre', $this->Padre->findById($id));

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Padre->save($this->request->data)) {
				$this->Session->setFlash(__('Padre / Diácono salvo com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The padre could not be saved. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Padre.' . $this->Padre->primaryKey => $id));
			$this->request->data = $this->Padre->find('first', $options);
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
		$this->Padre->id = $id;
		if (!$this->Padre->exists()) {
			throw new NotFoundException(__('Invalid padre'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Padre->delete()) {
			$this->Session->setFlash(__('Padre / Diácono excluído com sucesso.'), 'success', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The padre could not be deleted. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * delete_foto method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function delete_foto($id = null, $idCity = null) {
		$this->Padre->id = $id;
		if (!$this->Padre->exists()) {
			throw new NotFoundException(__('Invalid Padre'));
		}
		$this->Padre->updateAll(array('foto' => null), array('Padre.id' => $id));
		return $this->redirect(array('action' => 'view', $id));
	}
}
