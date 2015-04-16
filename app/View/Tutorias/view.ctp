<div class="tutorias view">
<h2><?php echo __('Tutoria'); ?></h2>
	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo h($tutoria['Tutoria']['id']); ?></td>
		</tr>
		<tr>
			<td> <?php echo __('Matricula'); ?></td>
			<td><?php echo h($tutoria['Tutoria']['matricula']); ?></td>
		</tr>		
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo h($tutoria['Tutoria']['porcentaje']); ?></td>
		</tr>	
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo h($tutoria['Tutoria']['created']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo h($tutoria['Tutoria']['modified']); ?></td>
		</tr>
	</table>
</div>