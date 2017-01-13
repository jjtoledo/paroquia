<?php
App::uses('AppController', 'Controller');
/**
 * FotoEventos Controller
 *
 * @property FotoEvento $FotoEvento
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class FotoEventosController extends AppController {

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
		$this->FotoEvento->recursive = 0;
		$this->set('fotoEventos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->FotoEvento->exists($id)) {
			throw new NotFoundException(__('Invalid foto evento'));
		}
		$options = array('conditions' => array('FotoEvento.' . $this->FotoEvento->primaryKey => $id));
		$this->set('fotoEvento', $this->FotoEvento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->FotoEvento->create();
			if ($this->FotoEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The foto evento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto evento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$eventos = $this->FotoEvento->Evento->find('list');
		$this->set(compact('eventos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->FotoEvento->exists($id)) {
			throw new NotFoundException(__('Invalid foto evento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->FotoEvento->save($this->request->data)) {
				$this->Session->setFlash(__('The foto evento has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The foto evento could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('FotoEvento.' . $this->FotoEvento->primaryKey => $id));
			$this->request->data = $this->FotoEvento->find('first', $options);
		}
		$eventos = $this->FotoEvento->Evento->find('list');
		$this->set(compact('eventos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->FotoEvento->id = $id;
		if (!$this->FotoEvento->exists()) {
			throw new NotFoundException(__('Invalid foto evento'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->FotoEvento->delete()) {
			$this->Session->setFlash(__('The foto evento has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The foto evento could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
