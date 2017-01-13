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

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Pastoral->recursive = 0;
		$this->set('pastorals', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Pastoral->exists($id)) {
			throw new NotFoundException(__('Invalid pastoral'));
		}
		$options = array('conditions' => array('Pastoral.' . $this->Pastoral->primaryKey => $id));
		$this->set('pastoral', $this->Pastoral->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Pastoral->create();
			if ($this->Pastoral->save($this->request->data)) {
				$this->Session->setFlash(__('The pastoral has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pastoral could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$comunidades = $this->Pastoral->Comunidade->find('list');
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
		if (!$this->Pastoral->exists($id)) {
			throw new NotFoundException(__('Invalid pastoral'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Pastoral->save($this->request->data)) {
				$this->Session->setFlash(__('The pastoral has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pastoral could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Pastoral.' . $this->Pastoral->primaryKey => $id));
			$this->request->data = $this->Pastoral->find('first', $options);
		}
		$comunidades = $this->Pastoral->Comunidade->find('list');
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
		$this->Pastoral->id = $id;
		if (!$this->Pastoral->exists()) {
			throw new NotFoundException(__('Invalid pastoral'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pastoral->delete()) {
			$this->Session->setFlash(__('The pastoral has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The pastoral could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
