<?php
App::uses('AppController', 'Controller');
/**
 * Alumnos Controller
 *
 * @property Alumno $Alumno
 * @property PaginatorComponent $Paginator
 */
class AlumnosController extends AppController {

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
		$this->Alumno->recursive = 0;
		$this->set('alumnos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
		$this->set('alumno', $this->Alumno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Alumno->create();
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('El alumno ha sido registrado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El alumno no se ha registrado. Por favor, vuelva intentarlo.'));
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
		if (!$this->Alumno->exists($id)) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Alumno->save($this->request->data)) {
				$this->Session->setFlash(__('The alumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The alumno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Alumno.' . $this->Alumno->primaryKey => $id));
			$this->request->data = $this->Alumno->find('first', $options);
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
		$this->Alumno->id = $id;
		if (!$this->Alumno->exists()) {
			throw new NotFoundException(__('Invalid alumno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Alumno->delete()) {
			$this->Session->setFlash(__('The alumno has been deleted.'));
		} else {
			$this->Session->setFlash(__('The alumno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	public function searchjson()
	{
		$term = null;
		if(!empty($this->request->query['term']))
		{
			$term = $this->request->query['term'];
			$terms = explode(' ', trim($term));
			$terms = array_diff($terms, array(' '));
			foreach($terms as $term)			
			{
				$conditions[] = array('Alumno.nombre LIKE' => '%'. $ter . '%');
			}

			$alumnos = $this->Alumno->find('all', array('recursiv' => -1, 'fields' => array('Alumno.id','Alumno.matricula','Alumno.nombre','Alumno.apellidopaterno','Alumno.apellidomaterno'), 'conditions'=> $conditions, 'limit' => 20));
		}
		echo json_encode($alumnos);
		$this->autoRender = false;
	}

	public function search()	
	{
		$search = null;
		if(!empty($this->request->query['search']))
		{
			$search = $this->request->query['search'];
			$search = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9]/','',$search);
			$terms = explode(' ', trim($search));
			$terms = array_diff($terms, array(''));

			foreach ($terms as $term) 
			{
				$terms1[] = preg_replace('/[^a-zA-ZñÑáéíóúÁÉÍÓÚ0-9]/','', $term);
				$conditions[] = array('Alumno.matricula LIKE' => '%'. $ter . '%');
			}
			$alumnos = $this->Alumno->find('all', array('recursiv'=> -1, 'conditions' => $conditions, 'limit' => 20));
			if(count($alumnos)==1)
			{
				return $this->redirect(array('controller' => 'alumnos', 'action' => 'view', $alumnos[0]['Alumno']['id']));
			}
			$terms1 = array_diff($terms1, array(''));
			$this->set(compact('alumnos','terms1'));
		}
		$this->set(compact('search'));

		if($this->request->is('ajax'))
		{
			$this->layout = false;
			$this->set('ajax', 1);
		} 
		else
		{
			$this->set('ajax', 0);
		}


	}
} 