<?php
App::uses('AppController', 'Controller');
/**
 * Investigacions Controller
 *
 * @property Investigacion $Investigacion
 * @property PaginatorComponent $Paginator
 */
class InvestigacionsController extends AppController {

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
		$this->Investigacion->recursive = 0;
		$this->set('investigacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Investigacion->exists($id)) {
			throw new NotFoundException(__('Invalid investigacion'));
		}
		$options = array('conditions' => array('Investigacion.' . $this->Investigacion->primaryKey => $id));
		$this->set('investigacion', $this->Investigacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Investigacion->create();
			if ($this->Investigacion->save($this->request->data)) {
				$this->Session->setFlash(__('El credito ha sido guardado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El credito no se pudo guardar. Por favor, intente de nuevo.'));
			}
		}
		$alumnos = $this->Investigacion->Alumno->find('list');
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
		if (!$this->Investigacion->exists($id)) {
			throw new NotFoundException(__('Invalid investigacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Investigacion->save($this->request->data)) {
				$this->Session->setFlash(__('The investigacion has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The investigacion could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Investigacion.' . $this->Investigacion->primaryKey => $id));
			$this->request->data = $this->Investigacion->find('first', $options);
		}
		$alumnos = $this->Investigacion->Alumno->find('list');
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
		$this->Investigacion->id = $id;
		if (!$this->Investigacion->exists()) {
			throw new NotFoundException(__('Invalid investigacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Investigacion->delete()) {
			$this->Session->setFlash(__('The investigacion has been deleted.'));
		} else {
			$this->Session->setFlash(__('The investigacion could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
