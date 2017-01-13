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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->FotoComunidade->recursive = 0;
		$this->set('fotoComunidades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FotoComunidade->exists($id)) {
			throw new NotFoundException(__('Invalid foto comunidade'));
		}
		$options = array('conditions' => array('FotoComunidade.' . $this->FotoComunidade->primaryKey => $id));
		$this->set('fotoComunidade', $this->FotoComunidade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FotoComunidade->create();
			if ($this->FotoComunidade->save($this->request->data)) {
				$this->Session->setFlash(__('The foto comunidade has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto comunidade could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$comunidades = $this->FotoComunidade->Comunidade->find('list');
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
		if (!$this->FotoComunidade->exists($id)) {
			throw new NotFoundException(__('Invalid foto comunidade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FotoComunidade->save($this->request->data)) {
				$this->Session->setFlash(__('The foto comunidade has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto comunidade could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('FotoComunidade.' . $this->FotoComunidade->primaryKey => $id));
			$this->request->data = $this->FotoComunidade->find('first', $options);
		}
		$comunidades = $this->FotoComunidade->Comunidade->find('list');
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
		$this->FotoComunidade->id = $id;
		if (!$this->FotoComunidade->exists()) {
			throw new NotFoundException(__('Invalid foto comunidade'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FotoComunidade->delete()) {
			$this->Session->setFlash(__('The foto comunidade has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The foto comunidade could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
