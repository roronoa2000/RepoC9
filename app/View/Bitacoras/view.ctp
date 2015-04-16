<div class="bitacoras view">
<h2><?php echo __('Bitacora'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Operacion'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['operacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Usuario'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['usuario']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Host'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['host']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['modificado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tabla'); ?></dt>
		<dd>
			<?php echo h($bitacora['Bitacora']['tabla']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bitacora'), array('action' => 'edit', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bitacora'), array('action' => 'delete', $bitacora['Bitacora']['id']), array(), __('Are you sure you want to delete # %s?', $bitacora['Bitacora']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bitacora'), array('action' => 'add')); ?> </li>
	</ul>
</div>
