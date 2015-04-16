<!-- app/View/Users/add.ctp -->
<div class="users form">

<?php echo $this->Form->create('User');?>
    <fieldset>
        <legend><?php echo __('Registrar usuario'); ?></legend>
        <?php echo $this->Form->input('nombre', array('class' => 'form-control', 'label' => 'Nombre'));
              echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Username'));
		      echo $this->Form->input('email', array('class' => 'form-control', 'label' => 'Email'));
              echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'password'));
		      echo $this->Form->input('password_confirm', array('label' => 'Confirma Password *', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password','class' => 'form-control'));
              echo $this->Form->input('role', array('class' => 'form-control',
                    'options' => array( 'Admin' => 'Admin', 'Alumno' => 'Alumno', 'Academico' => 'Academico', 'Extracurricular' => 'Extracurricular', 'Formacion' => 'Formacion', 'Investigacion' => 'Investigacion', 'Tutoria' => 'Tutoria')));
		?>
    <br>
    <?php
		        echo $this->Form->submit('Registrar', array('class' => 'form-submit',  'title' => 'Click here to add the user') ); 
        ?>
    </fieldset>
<?php echo $this->Form->end(); ?>
</div>
<br>
<?php 
if($this->Session->check('Auth.User')){
echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
echo "<br>";
echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
}else{
echo $this->Html->link( "Regresar a Login",   array('action'=>'login') ); 
}
?>