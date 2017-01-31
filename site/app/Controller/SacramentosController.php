<?php
App::uses('AppController', 'Controller');
/**
 * Sacramentos Controller
 *
 * @property Sacramento $Sacramento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class SacramentosController extends AppController {

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
		$this->Sacramento->recursive = 0;
		$this->set('sacramentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Sacramento->exists($id)) {
			throw new NotFoundException(__('Sacramento inválido.'));
		}
		$options = array('conditions' => array('Sacramento.' . $this->Sacramento->primaryKey => $id));
		$this->set('sacramento', $this->Sacramento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Sacramento->create();
			if ($this->Sacramento->save($this->request->data)) {
				$this->Session->setFlash(__('Sacramento salvo com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sacramento could not be saved. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
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
		if (!$this->Sacramento->exists($id)) {
			throw new NotFoundException(__('Sacramento inválido.'));
		}

		$this->set('sacramento', $this->Sacramento->findById($id));

		if ($this->request->is(array('post', 'put'))) {
			if ($this->Sacramento->save($this->request->data)) {
				$this->Session->setFlash(__('Sacramento salvo com sucesso.'), 'success', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sacramento could not be saved. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Sacramento.' . $this->Sacramento->primaryKey => $id));
			$this->request->data = $this->Sacramento->find('first', $options);
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
		$this->Sacramento->id = $id;
		if (!$this->Sacramento->exists()) {
			throw new NotFoundException(__('Sacramento inválido.'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Sacramento->delete()) {
			$this->Session->setFlash(__('Sacramento excluído com sucesso.'), 'success', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The sacramento could not be deleted. Please, try again.'), 'error', array('class' => 'alert alert-danger'));
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
		$this->Sacramento->id = $id;
		if (!$this->Sacramento->exists()) {
			throw new NotFoundException(__('Invalid Sacramento'));
		}
		
		$this->Sacramento->updateAll(array('foto' => null), array('Sacramento.id' => $id));
		return $this->redirect(array('action' => 'view', $id));
	}
}
