<div class="extracurriculars view">
	<h2><?php echo __('Extracurricular'); ?></h2>
	
	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo h($extracurricular['Extracurricular']['id']); ?></td>
		</tr>
		<tr>
			<td> <?php echo __('Matricula'); ?></td>
			<td><?php echo h($extracurricular['Extracurricular']['matricula']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo h($extracurricular['Extracurricular']['porcentaje']); ?></td>
		</tr>	
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo h($extracurricular['Extracurricular']['created']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo h($extracurricular['Extracurricular']['modified']); ?></td>
		</tr>
	</table>
</div>