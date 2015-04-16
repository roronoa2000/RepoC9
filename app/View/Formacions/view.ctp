<div class="formacions view">
<h2><?php echo __('Formacion'); ?></h2>
	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo h($formacion['Formacion']['id']); ?></td>
		</tr>
		<tr>
			<td> <?php echo __('Matricula'); ?></td>
			<td><?php echo h($formacion['Formacion']['matricula']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo h($formacion['Formacion']['porcentaje']); ?></td>
		</tr>	
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo h($formacion['Formacion']['created']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo h($formacion['Formacion']['modified']); ?></td>
		</tr>
	</table>
</div>