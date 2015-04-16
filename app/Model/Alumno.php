<?php
App::uses('AppModel', 'Model');
/**
 * Alumno Model
 *
 * @property Academica $Academica
 * @property Extracurricular $Extracurricular
 * @property Formacion $Formacion
 * @property Investigacion $Investigacion
 * @property Tutoria $Tutoria
 */
class Alumno extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'matricula';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'matricula' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo puede ingresar numeros',				
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede quedar vacio',				
			),
			'minLength' => array(
				'rule' => array('minLength','8'),
				'message' => 'La matricula debe ser de 8 digitos',
				),
				'maxLength' => array(
				'rule' => array('maxLength','8'),
				'message' => 'La matricula debe ser de 8 digitos',
				),
			'unique' => array(
				'rule' => array('isUnique'),
				'message' => 'Esta matricula ya esta registrada',
				),
		),
		'nombre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede quedar vacio',
				),
		),
		'apellidopaterno' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede quedar vacio',
				),
		),
		'apellidomaterno' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede quedar vacio',
			),
		),
		'semestre' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				'message' => 'Este campo no puede quedar vacio',
				),
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'Solo puede ingresar un numero',
				),
			'range' => array(
				'rule' => array('range',0,10),
				'message' => 'Ingrese un semestre valido',
				),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasOne associations
 *
 * @var array
 */
	public $hasOne = array(
		'Academica' => array(
			'className' => 'Academica',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Extracurricular' => array(
			'className' => 'Extracurricular',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Formacion' => array(
			'className' => 'Formacion',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Investigacion' => array(
			'className' => 'Investigacion',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tutoria' => array(
			'className' => 'Tutoria',
			'foreignKey' => 'alumno_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
