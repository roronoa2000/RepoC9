<?php
App::uses('AppController', 'Controller');
/**
 * Tutorias Controller
 *
 * @property Tutoria $Tutoria
 * @property PaginatorComponent $Paginator
 */
class TutoriasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Tutoria->recursive = 0;
		$this->set('tutorias', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tutoria->exists($id)) {
			throw new NotFoundException(__('Invalid tutoria'));
		}
		$options = array('conditions' => array('Tutoria.' . $this->Tutoria->primaryKey => $id));
		$this->set('tutoria', $this->Tutoria->find('first', $options));		
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tutoria->create();
			if ($this->Tutoria->save($this->request->data)) {
				$this->Session->setFlash(__('El credito ha sido guardado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El credito no se pudo guardar. Por favor, intente de nuevo.'));
			}
		}
		$alumnos = $this->Tutoria->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tutoria->exists($id)) {
			throw new NotFoundException(__('Invalid tutoria'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tutoria->save($this->request->data)) {
				$this->Session->setFlash(__('The tutoria has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tutoria could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tutoria.' . $this->Tutoria->primaryKey => $id));
			$this->request->data = $this->Tutoria->find('first', $options);
		}
		$alumnos = $this->Tutoria->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tutoria->id = $id;
		if (!$this->Tutoria->exists()) {
			throw new NotFoundException(__('Invalid tutoria'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tutoria->delete()) {
			$this->Session->setFlash(__('The tutoria has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tutoria could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
