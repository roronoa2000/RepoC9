<div class="col-md-3 " aling="center">
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>    
    <fieldset>
        <h2 class="form-signin-heading">Inicia Sesion</h2>
        <?php echo $this->Form->input('username', array('class' => 'form-control', 'label' => 'Username'));
        echo $this->Form->input('password', array('class' => 'form-control', 'label' => 'Password'));
    ?>
    </fieldset>
    <p>
<?php echo $this->Form->end(__('Login', array('class' => 'btn btn-success', 'label' => 'Login'))); ?>
</p>
</div>
<div>
<?php
 echo $this->Html->link( "Registrate",   array('action'=>'add') ); 
?>
</div>
</div>