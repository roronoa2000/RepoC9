<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Edit User'); ?></legend>
        <?php 
		echo $this->Form->hidden('id', array('value' => $this->data['User']['id']));
		echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
		echo $this->Form->input('username', array( 'readonly' => 'readonly', 'label' => 'Username no puede ser cambiado!','class' => 'form-control'));
		echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'email'));
        echo $this->Form->input('password_update', array( 'label' => 'Nueva Password (Deja en blanco si no quieres cambiarla)', 'maxLength' => 255, 'type'=>'password','required' => 0,'class' => 'form-control'));
		echo $this->Form->input('password_confirm_update', array('label' => 'Confirma Nueva Password *', 'maxLength' => 255, 'title' => 'Confirm New password', 'type'=>'password','required' => 0,'class' => 'form-control'));
		
?>
<p>
<?php
		echo $this->Form->input('role', array('class' => 'form-control','options' => array( 'Admin' => 'Admin', 'Alumno' => 'Alumno', 'Academico' => 'Academico', 'Extracurricular' => 'Extracurricular', 'Formacion' => 'Formacion', 'Investigacion' => 'Investigacion', 'Tutoria' => 'Tutoria'))); ?>
         </p>
		<p>
		<?php
		echo $this->Form->submit('Guardar cambios', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
?>
</p>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<?php 
echo $this->Html->link( "Regresar a la lista",   array('action'=>'index') ); 
?>
<br/>