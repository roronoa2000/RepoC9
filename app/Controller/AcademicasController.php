<?php
App::uses('AppController', 'Controller');
/**
 * Academicas Controller
 *
 * @property Academica $Academica
 * @property PaginatorComponent $Paginator
 */
class AcademicasController extends AppController {

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
		$this->Academica->recursive = 0;
		$this->set('academicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Academica->exists($id)) {
			throw new NotFoundException(__('Invalid academica'));
		}
		$options = array('conditions' => array('Academica.' . $this->Academica->primaryKey => $id));
		$this->set('academica', $this->Academica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Academica->create();
			if ($this->Academica->save($this->request->data)) {
				$this->Session->setFlash(__('El credito ha sido guardado con exito.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El credito no se pudo guardar. Por favor, intente de nuevo.'));
			}
		}
		$alumnos = $this->Academica->Alumno->find('list');
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
		if (!$this->Academica->exists($id)) {
			throw new NotFoundException(__('Invalid academica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Academica->save($this->request->data)) {
				$this->Session->setFlash(__('The academica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The academica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Academica.' . $this->Academica->primaryKey => $id));
			$this->request->data = $this->Academica->find('first', $options);
		}
		$alumnos = $this->Academica->Alumno->find('list');
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
		$this->Academica->id = $id;
		if (!$this->Academica->exists()) {
			throw new NotFoundException(__('Invalid academica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Academica->delete()) {
			$this->Session->setFlash(__('The academica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The academica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Academica->recursive = 0;
		$this->set('academicas', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Academica->exists($id)) {
			throw new NotFoundException(__('Invalid academica'));
		}
		$options = array('conditions' => array('Academica.' . $this->Academica->primaryKey => $id));
		$this->set('academica', $this->Academica->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Academica->create();
			if ($this->Academica->save($this->request->data)) {
				$this->Session->setFlash(__('The academica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The academica could not be saved. Please, try again.'));
			}
		}
		$alumnos = $this->Academica->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Academica->exists($id)) {
			throw new NotFoundException(__('Invalid academica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Academica->save($this->request->data)) {
				$this->Session->setFlash(__('The academica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The academica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Academica.' . $this->Academica->primaryKey => $id));
			$this->request->data = $this->Academica->find('first', $options);
		}
		$alumnos = $this->Academica->Alumno->find('list');
		$this->set(compact('alumnos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Academica->id = $id;
		if (!$this->Academica->exists()) {
			throw new NotFoundException(__('Invalid academica'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Academica->delete()) {
			$this->Session->setFlash(__('The academica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The academica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
