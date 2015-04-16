<div class="page-header">
	<h2><?php echo __('Bitacoras'); ?></h2>
</div>
<div class="col-md-12">
	<table class ="table table-striped">
		<thead>
			<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('operacion'); ?></th>
				<th><?php echo $this->Paginator->sort('usuario'); ?></th>
				<th><?php echo $this->Paginator->sort('host'); ?></th>
				<th><?php echo $this->Paginator->sort('modificado'); ?></th>
				<th><?php echo $this->Paginator->sort('tabla'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($bitacoras as $bitacora): ?>
			<tr>
				<td><?php echo h($bitacora['Bitacora']['id']); ?>&nbsp;</td>
				<td><?php echo h($bitacora['Bitacora']['operacion']); ?>&nbsp;</td>
				<td><?php echo h($bitacora['Bitacora']['usuario']); ?>&nbsp;</td>
				<td><?php echo h($bitacora['Bitacora']['host']); ?>&nbsp;</td>
				<td><?php echo h($bitacora['Bitacora']['modificado']); ?>&nbsp;</td>
				<td><?php echo h($bitacora['Bitacora']['tabla']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('action' => 'view', $bitacora['Bitacora']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bitacora['Bitacora']['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bitacora['Bitacora']['id']), array('class' => 'btn btn-sm btn-default'), array('confirm' => __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id']))); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p>
		<?php
			echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')));
		?>	
	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('Anterior '), array(), null, array('class' => 'prev disabled btn btn-sn btn-info'));
			echo $this->Paginator->numbers(array('separator' => ' '));
			echo $this->Paginator->next(__(' Sigiente') . ' >', array(), null, array('class' => 'btn btn-sn btn-info next disabled'));
		?>
	</div>
</div>