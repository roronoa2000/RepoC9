<div class="page-header">
	<h2><?php echo __('Investigacions'); ?></h2>
	
</div>
	<div class="col-md-12">


	<table class ="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
		
			<th><?php echo $this->Paginator->sort('matricula'); ?></th>
			<th><?php echo $this->Paginator->sort('porcentaje'); ?></th>
			<th><?php echo $this->Paginator->sort('creado'); ?></th>
			<th><?php echo $this->Paginator->sort('modificado'); ?></th>
			<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($investigacions as $investigacion): ?>
	<tr>
		<td><?php echo h($investigacion['Investigacion']['id']); ?>&nbsp;</td>
	
		<td><?php echo h($investigacion['Investigacion']['matricula']); ?>&nbsp;</td>
		<td><?php echo h($investigacion['Investigacion']['porcentaje']); ?>&nbsp;</td>
		<td><?php echo h($investigacion['Investigacion']['created']); ?>&nbsp;</td>
		<td><?php echo h($investigacion['Investigacion']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $investigacion['Investigacion']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $investigacion['Investigacion']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $investigacion['Investigacion']['id']), array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $investigacion['Investigacion']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-sn btn-info'));
		echo $this->Paginator->numbers(array('separator' => ' '));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-sn btn-info'));
	?>
	</div>
</div>