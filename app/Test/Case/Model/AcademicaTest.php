<?php
App::uses('Academica', 'Model');

/**
 * Academica Test Case
 *
 */
class AcademicaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.academica',
		'app.alumno'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Academica = ClassRegistry::init('Academica');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Academica);

		parent::tearDown();
	}

}
