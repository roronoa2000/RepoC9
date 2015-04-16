<br><br>
<div class"page-header">
	<h2><?php echo __('Alumno'); ?></h2>
</div>	
	
<div class="col-md-6">
<p>
<table class="table table-striped">
<tr>
	<td>	<dt><?php echo __('Id'); ?></dt> </td>
	<td align=center>	<?php echo h($alumno['Alumno']['id']); ?> </td>
</tr>			
<tr>
	<td>	<dt><?php echo __('Matricula'); ?></dt>	</td>
	<td align=center>	<?php echo h($alumno['Alumno']['matricula']); ?> </td>
</tr>
<tr>
	<td>	<dt><?php echo __('Nombre'); ?></dt>	</td>
	<td align=center>	<?php echo h($alumno['Alumno']['nombre']); ?>	</td>
</tr>	
<tr>
	<td>	<dt><?php echo __('Apellidopaterno'); ?></dt>	</td>
	<td align=center>	<?php echo h($alumno['Alumno']['apellidopaterno']); ?>	</td>
</tr>	
<tr>
	<td>	<dt><?php echo __('Apellidomaterno'); ?></dt>	</td>
	<td align=center>	<?php echo h($alumno['Alumno']['apellidomaterno']); ?>	</td>
</tr>	
<tr>	
	<td>	<dt><?php echo __('Semestre'); ?></dt> </td>
	<td align=center>	<?php echo h($alumno['Alumno']['semestre']); ?>	</td>
</tr>	
<tr>	
	<td>	<dt><?php echo __('Creado'); ?></dt>	</td>
	<td align=center>	<?php echo h($alumno['Alumno']['created']); ?>	</td>
</tr>	
<tr>	
	<td>	<dt><?php echo __('Modificado'); ?></dt>	</td>
	<td align=center>	<?php echo h($alumno['Alumno']['modified']); ?>	</td>
</tr>		
</table>
</p>






<p>
<div class="related">
	<h3><?php echo __('Credito de Actividades Academicas'); ?></h3>
			<?php if (!empty($alumno['Academica'])): ?>
		
<table class="table table-striped">	
	<tr>
		<td><?php echo __('Porcentaje'); ?></td>
		<td><?php echo $alumno['Academica']['porcentaje']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Creado'); ?></td>
		<td><?php echo $alumno['Academica']['created']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Modificado'); ?></td>
		<td><?php echo $alumno['Academica']['modified']; ?></td>
	</tr>
</table>
	<?php endif; ?>	
</div>
</p>


<div class="related">
	<h3><?php echo __('Credito de Actividades Extracurricularer'); ?></h3>
		<?php if (!empty($alumno['Extracurricular'])): ?>

<table class="table table-striped">	
	<tr>
		<td><?php echo __('Porcentaje'); ?></td>
		<td><?php echo $alumno['Academica']['porcentaje']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Creado'); ?></td>
		<td><?php echo $alumno['Academica']['created']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Modificado'); ?></td>
		<td><?php echo $alumno['Academica']['modified']; ?></td>
	</tr>
</table>
	<?php endif; ?>

</div>


<div class="related">
	<h3><?php echo __('Credito de Formacion'); ?></h3>
		<?php if (!empty($alumno['Formacion'])): ?>

<table class="table table-striped">	
	<tr>
		<td><?php echo __('Porcentaje'); ?></td>
		<td><?php echo $alumno['Academica']['porcentaje']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Creado'); ?></td>
		<td><?php echo $alumno['Academica']['created']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Modificado'); ?></td>
		<td><?php echo $alumno['Academica']['modified']; ?></td>
	</tr>
</table>
	<?php endif; ?>
		
</div>


	<div class="related">
	<h3><?php echo __('Credito de Investigacion'); ?></h3>
	<?php if (!empty($alumno['Investigacion'])): ?>
	
<table class="table table-striped">	
	<tr>
		<td><?php echo __('Porcentaje'); ?></td>
		<td><?php echo $alumno['Academica']['porcentaje']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Creado'); ?></td>
		<td><?php echo $alumno['Academica']['created']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Modificado'); ?></td>
		<td><?php echo $alumno['Academica']['modified']; ?></td>
	</tr>
</table>
	<?php endif; ?>
	</div>


<div class="related">
		<h3><?php echo __('Credito de Tutoria'); ?></h3>
	<?php if (!empty($alumno['Tutoria'])): ?>

<table class="table table-striped">	
	<tr>
		<td><?php echo __('Porcentaje'); ?></td>
		<td><?php echo $alumno['Academica']['porcentaje']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Creado'); ?></td>
		<td><?php echo $alumno['Academica']['created']; ?></td>
	</tr>
	<tr>
		<td><?php echo __('Modificado'); ?></td>
		<td><?php echo $alumno['Academica']['modified']; ?></td>
	</tr>
</table>
	<?php endif; ?>		