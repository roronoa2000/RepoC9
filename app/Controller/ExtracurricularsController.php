<?php
App::uses('AppController', 'Controller');
/**
 * Extracurriculars Controller
 *
 * @property Extracurricular $Extracurricular
 * @property PaginatorComponent $Paginator
 */
class ExtracurricularsController extends AppController {

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
		$this->Extracurricular->recursive = 0;
		$this->set('extracurriculars', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Extracurricular->exists($id)) {
			throw new NotFoundException(__('Invalid extracurricular'));
		}
		$options = array('conditions' => array('Extracurricular.' . $this->Extracurricular->primaryKey => $id));
		$this->set('extracurricular', $this->Extracurricular->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Extracurricular->create();
			if ($this->Extracurricular->save($this->request->data)) {
				$this->Session->setFlash(__('El credito ha sido guardado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El credito no se pudo guardar. Por favor, intente de nuevo.'));
			}
		}
		$alumnos = $this->Extracurricular->Alumno->find('list');
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
		if (!$this->Extracurricular->exists($id)) {
			throw new NotFoundException(__('Invalid extracurricular'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Extracurricular->save($this->request->data)) {
				$this->Session->setFlash(__('The extracurricular has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The extracurricular could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Extracurricular.' . $this->Extracurricular->primaryKey => $id));
			$this->request->data = $this->Extracurricular->find('first', $options);
		}
		$alumnos = $this->Extracurricular->Alumno->find('list');
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
		$this->Extracurricular->id = $id;
		if (!$this->Extracurricular->exists()) {
			throw new NotFoundException(__('Invalid extracurricular'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Extracurricular->delete()) {
			$this->Session->setFlash(__('The extracurricular has been deleted.'));
		} else {
			$this->Session->setFlash(__('The extracurricular could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
