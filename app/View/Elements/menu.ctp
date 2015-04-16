 <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Creditos Complementarios</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><?php echo $this->Html->link('Inicio', array('controller' => 'pages', 'action' => 'home')) ?></li>                                                     
               <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Lista de <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Alumnos', array('controller' => 'alumnos', 'action' => 'index')) ?></li>            
                <li><?php echo $this->Html->link('Creditos de Act. Academicas', array('controller' => 'academicas', 'action' => 'index')) ?></li>            
               <li><?php echo $this->Html->link('Creditos de Act. Extracurriculares', array('controller' => 'extracurriculars', 'action' => 'index')) ?></li>            
                <li><?php echo $this->Html->link('Creditos de Formacion', array('controller' => 'formacions', 'action' => 'index')) ?></li>            
                <li><?php echo $this->Html->link('Creditos de Investigacion', array('controller' => 'investigacions', 'action' => 'index')) ?></li>            
                <li><?php echo $this->Html->link('Creditos de Tutorias', array('controller' => 'tutorias', 'action' => 'index')) ?></li>                    
                <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'index')) ?></li>
                </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Registrar <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><?php echo $this->Html->link('Alumnos', array('controller' => 'alumnos', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Creditos Act. Academicas', array('controller' => 'academicas', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Creditos de Act. Extracurriculares', array('controller' => 'extracurriculars', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Creditos de Formacion', array('controller' => 'formacions', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Creditos de Investigacion', array('controller' => 'investigacions', 'action' => 'add')) ?></li>
                <li><?php echo $this->Html->link('Creditos de Tutorias', array('controller' => 'tutorias', 'action' => 'add')) ?></li>    
                <li><?php echo $this->Html->link('Usuarios', array('controller' => 'users', 'action' => 'add')) ?></li>                
              </ul>
            </li>
              
          </ul>
            
            <?php echo $this->Form->create('Alumno', array('type' => 'GET', 'class' => 'navbar-form navbar-left', 'url' => array('controller' => 'alumnos', 'action' => 'search'))); ?>

            <div class="form-group">
              <?php echo $this->Form->input('search', array('label'=>false, 'div'=>false, 'id' => 's', 'class'=> 'form-control s', 'autocomplete' => 'off', 'placeholder' => 'Buscar alumno...' )) ?>
            </div>
            <?php echo $this->Form->button('Buscar', array('div'=> false, 'class'=>'btn btn-primary')); ?>
            <?php echo $this->Form->end(); ?>



          <div id="navbar" class="navbar-collapse collapse">
                            
              
              <?php 
                echo $this->Html->link( "Cerrar Sesion",   array('controller'=>'users', 'action'=>'logout'), array('class' => 'btn btn-success navbar-btn navbar-right') );
              ?>
            </form>
        </div>
      </div><!--/.nav-collapse -->
    </div>
  </nav>


    <br><br><br>