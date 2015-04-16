<?php
App::uses('AppController', 'Controller');
/**
 * Formacions Controller
 *
 * @property Formacion $Formacion
 * @property PaginatorComponent $Paginator
 */
class FormacionsController extends AppController {

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
		$this->Formacion->recursive = 0;
		$this->set('formacions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Formacion->exists($id)) {
			throw new NotFoundException(__('Invalid formacion'));
		}
		$options = array('conditions' => array('Formacion.' . $this->Formacion->primaryKey => $id));
		$this->set('formacion', $this->Formacion->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Formacion->create();
			if ($this->Formacion->save($this->request->data)) {
				$this->Session->setFlash(__('El credito ha sido guardado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El credito no se pudo guardar. Por favor, intente de nuevo.'));
			}
		}
		$alumnos = $this->Formacion->Alumno->find('list');
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
		if (!$this->Formacion->exists($id)) {
			throw new NotFoundException(__('Invalid formacion'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Formacion->save($this->request->data)) {
				$this->Session->setFlash(__('Los cambios han sido guardados.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los cambios no se pudieron guardar. Por favor, intente de nuevo.'));
			}
		} else {
			$options = array('conditions' => array('Formacion.' . $this->Formacion->primaryKey => $id));
			$this->request->data = $this->Formacion->find('first', $options);
		}
		$alumnos = $this->Formacion->Alumno->find('list');
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
		$this->Formacion->id = $id;
		if (!$this->Formacion->exists()) {
			throw new NotFoundException(__('Invalid formacion'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Formacion->delete()) {
			$this->Session->setFlash(__('El credito ha sido eliminado.'));
		} else {
			$this->Session->setFlash(__('No se pudo borrar el credito. Por favo, intente de nuevo.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
