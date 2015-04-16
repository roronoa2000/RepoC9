<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Extracurricular'); ?>
				<fieldset>
					<legend><?php echo __('Registrar Credito de Actividades Extracurriculares'); ?></legend>
					<?php
						echo $this->Form->input('alumno_id', array('class' => 'form-control', 'label' => 'Id'));
						echo $this->Form->input('matricula', array('class' => 'form-control', 'label' => 'Matricula'));		
						echo $this->Form->input('porcentaje', array('class' => 'form-control', 'label' => 'Porcentaje'));
					?>
				</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Registrar', 'class' =>'btn btn-success')); ?>
				</p>
		</div>
	</div>
</div>
