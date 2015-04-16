<?php if($ajax !=1):  ?>

	<h1>Buscar Alumno</h1>
	<br>
	<div class="row">
		<?php echo $this->Form->create('Alumno', array('type'=>'GET')); ?>
		<div class="col-sm-4">
			<?php echo $this->Form->input('search', array('label' => false, 'div' => false, 'class' => 'form-control', 'autocomplete' => 'off', 'value' => $search)); ?>
		</div>

		<div class="col-sm-3">
			<?php echo $this->Form->button('Buscar', array('div' => false, 'class' => 'btn btn-primary')); ?>
		</div>

		<?php echo $this->Form->end(); ?>

	</div>

<br><br>
<?php endif ?>


<?php if(!empty($search)): ?>

	<?php if(!empty($alumnos)): ?>

	<div class="row">
		<?php foreach($alumnos as $alumno): ?>
			<div class="col-sm-8">
				<?php echo $this->Html->link($alumno['Alumno']['matricula'].' '.$alumno['Alumno']['nombre'].' '.$alumno['Alumno']['apellidopaterno'].' '.$alumno['Alumno']['apellidomaterno'] , array('action' => 'view', $alumno['Alumno']['id'])); ?>
<br>
			</div>
		<?php endforeach; ?>
	</div>
	<br><br><br>

	<?php else: ?> 
	<h3>No se encontró el alumno que busca</h3>

	<?php endif ?>


<?php endif;  ?>