<div class="academicas view">
	<h2><?php echo __('Academica'); ?></h2>

	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo h($academica['Academica']['id']); ?></td>
		</tr>		
		<tr>
			<td><?php echo __('Matricula'); ?></td>
			<td><?php echo h($academica['Academica']['matricula']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo h($academica['Academica']['porcentaje']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo h($academica['Academica']['created']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo h($academica['Academica']['modified']); ?></td>
		</tr>		
	</table>
</div>