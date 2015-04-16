<div class="investigacions view">
<h2><?php echo __('Investigacion'); ?></h2>
	<table class="table table-striped">	
		<tr>
			<td><?php echo __('Id'); ?></td>
			<td><?php echo h($investigacion['Investigacion']['id']); ?></td>
		</tr>
		<tr>
			<td> <?php echo __('Matricula'); ?></td>
			<td><?php echo h($investigacion['Investigacion']['matricula']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Porcentaje'); ?></td>
			<td><?php echo h($investigacion['Investigacion']['porcentaje']); ?></td>
		</tr>	
		<tr>
			<td><?php echo __('Creado'); ?></td>
			<td><?php echo h($investigacion['Investigacion']['created']); ?></td>
		</tr>
		<tr>
			<td><?php echo __('Modificado'); ?></td>
			<td><?php echo h($investigacion['Investigacion']['modified']); ?></td>
		</tr>
	</table>
</div>