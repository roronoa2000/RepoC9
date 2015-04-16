<div class="bitacoras form">
<?php echo $this->Form->create('Bitacora'); ?>
	<fieldset>
		<legend><?php echo __('Add Bitacora'); ?></legend>
	<?php
		echo $this->Form->input('operacion');
		echo $this->Form->input('usuario');
		echo $this->Form->input('host');
		echo $this->Form->input('modificado');
		echo $this->Form->input('tabla');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Bitacoras'), array('action' => 'index')); ?></li>
	</ul>
</div>
