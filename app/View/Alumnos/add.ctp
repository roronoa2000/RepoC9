<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Alumno'); ?>
				<fieldset>
					<legend><?php echo __('Registrar Nuevo Alumno'); ?></legend>
					<?php
						echo $this->Form->input('matricula', array('class' => 'form-control', 'label' => 'Matricula'));
						echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
						echo $this->Form->input('apellidopaterno', array('class' => 'form-control', 'label' => 'Apellido Paterno')); 
						echo $this->Form->input('apellidomaterno', array('class' => 'form-control', 'label' => 'Apellido Materno')); 
						echo $this->Form->input('semestre', array('options' => array('1' => '1', '2' =>'2', '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9'),'label'=>'','class' => 'form-control', 'label' => 'Semestre')); 
					?>
				</fieldset>
			<p>
				<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
			</p>
		</div>
	</div>
</div>