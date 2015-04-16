<div class="page-header">
	<h2><?php echo __('Extracurriculars'); ?></h2>
	
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
			<?php foreach ($extracurriculars as $extracurricular): ?>
			<tr>
				<td><?php echo h($extracurricular['Extracurricular']['id']); ?>&nbsp;</td>
				
				
				
				<td><?php echo h($extracurricular['Extracurricular']['matricula']); ?>&nbsp;</td>
				<td><?php echo h($extracurricular['Extracurricular']['porcentaje']); ?>&nbsp;</td>
				<td><?php echo h($extracurricular['Extracurricular']['created']); ?>&nbsp;</td>
				<td><?php echo h($extracurricular['Extracurricular']['modified']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Detalle'), array('action' => 'view', $extracurricular['Extracurricular']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $extracurricular['Extracurricular']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Form->postLink(__('Eliminar'), array('action' => 'delete', $extracurricular['Extracurricular']['id']), array('class' => 'btn btn-sm btn-default'),array('confirm' => __('Are you sure you want to delete # %s?', $extracurricular['Extracurricular']['id']))); ?>
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
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-sn btn-info'));
			?>
		</div>
	</div>

