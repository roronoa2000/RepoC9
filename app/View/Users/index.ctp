<div class="page-header">
	<h2><?php echo __('Usuarios'); ?></h2>

</div>
	<div class="col-md-12">
		<table class ="table table-striped">
			<thead>
				<tr>
					<th><?php echo $this->Form->checkbox('all', array('name' => 'CheckAll',  'id' => 'CheckAll')); ?></th>
					<th><?php echo $this->Paginator->sort('nombre', 'Nombre');?>  </th>
					<th><?php echo $this->Paginator->sort('username', 'Username');?>  </th>
					<th><?php echo $this->Paginator->sort('email', 'E-Mail');?></th>
					<th><?php echo $this->Paginator->sort('created', 'Created');?></th>
					<th><?php echo $this->Paginator->sort('modified','Last Update');?></th>
					<th><?php echo $this->Paginator->sort('role','Role');?></th>
					<th><?php echo $this->Paginator->sort('status','Status');?></th>
					<th>Acciones</th>
		</tr>
	</thead>
	<tbody>						
		<?php $count=0; ?>
		<?php foreach($users as $user): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '<tr>'; else: echo '<tr class="zebra">' ?>
		<?php endif; ?>
			<td><?php echo $this->Form->checkbox('User.id.'.$user['User']['id']); ?></td>
			
			<td><?php echo $this->Html->link( $user['User']['nombre'], array('action'=>'edit', $user['User']['id']) );?></td>

			<td><?php echo $this->Html->link( $user['User']['username']  ,   array('action'=>'edit', $user['User']['id']),array('escape' => false) );?></td>

			<td style="text-align: center;"><?php echo $user['User']['email']; ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['created']); ?></td>
			<td style="text-align: center;"><?php echo $this->Time->niceShort($user['User']['modified']); ?></td>
			<td style="text-align: center;"><?php echo $user['User']['role']; ?></td>
			<td style="text-align: center;"><?php echo $user['User']['status']; ?></td>
			<td >
			<?php echo $this->Html->link(    "Editar",   array('action'=>'edit', $user['User']['id']), array('class' => 'btn btn-sm btn-default') ); ?>  
			<?php
				if( $user['User']['status'] != 0){ 
					echo $this->Html->link(    "Delete", array('action'=>'delete', $user['User']['id']), array('class' => 'btn btn-sm btn-default'));}else{
					echo $this->Html->link(    "Re-Activate", array('action'=>'activate', $user['User']['id']), array('class' => 'btn btn-sm btn-default'));
					}
			?>
			</td>
		</tr>
		<?php endforeach; ?>
		<?php unset($user); ?>
	</tbody>
</table>
<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Pagina {:page} de {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled btn btn-sn btn-info'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled btn btn-sn btn-info'));
	?>
	</div>
<br>
</div>				
<?php echo $this->Html->link( "Agregar nuevo usuario.",   array('action'=>'add'),array('escape' => false) ); ?>
<br/>