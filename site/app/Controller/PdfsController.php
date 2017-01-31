<?php
App::uses('AppController', 'Controller');
/**
 * Pdfs Controller
 *
 * @property Pdf $Pdf
 * @property PaginatorComponent $Paginator
 * @property FlashComponent $Flash
 * @property SessionComponent $Session
 */
class PdfsController extends AppController {

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
			'order' => array(
				'Pdf.id' => 'DESC'
			)
		);
		$this->set('pdfs', $this->Paginator->paginate());
	}


/**
 * add method
 *
 * @return void
 */
	public function add($id = null) {;

		$photo = array();
		if ($this->request->is('post')) {				
			for ($i=0; $i < sizeof($this->request->data['Pdf']['pdfs']); $i++) { 
				$photo = array('Pdf' => 
							array('pdf' => $this->request->data['Pdf']['pdfs'][$i]));
				$this->Pdf->create();			
				if (!$this->Pdf->save($photo)) {
					//debug($this->request->data['Pdf']['pdfs']);
					$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
				}
			}
			$this->Session->setFlash(__('Jornais salvos com sucesso.'), 'success', array('class' => '	alert alert-success'));
			return $this->redirect(array('action' => 'index', $id));
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
		$this->Pdf->id = $id;
		if (!$this->Pdf->exists()) {
			throw new NotFoundException(__('Jornal inválido')); }
		$this->request->onlyAllow('post', 'delete');
		if ($this->Pdf->delete()) {
			$this->Session->setFlash(__('Jornal exluído com sucesso.'), 'success', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('Erro, tente novamente.'), 'error', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
