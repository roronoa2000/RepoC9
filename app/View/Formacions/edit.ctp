<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Formacion'); ?>
			<fieldset>
				<legend><?php echo __('Editar Credito de Formacion'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('porcentaje', array('class' => 'form-control', 'label' => 'porcentaje'));		
				?>
			</fieldset>
			<p>
				<?php echo $this->Form->end(array('label' => 'Guardar', 'class' =>'btn btn-success')); ?>
			</p>
		</div>
	</div>
</div>