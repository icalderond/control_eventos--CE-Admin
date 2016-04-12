<?php 

$url = $_SERVER["SCRIPT_NAME"];
$break = Explode('/', $url);
$file = $break[count($break) - 1];

?>

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#339933 !important; ">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php   " style="color: #fff">Control de Eventos Admin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li <?php echo $file=='index.php'?'class="active"':'';?> ><a href="index.php"><i class="fa"></i>Eventos</a></li>
            <li <?php echo $file=='subevento.php'?'class="active"':'';?> ><a href="subevento.php"><i class="fa"></i>Sub-Eventos</a></li>
            <li <?php echo $file=='alumnos.php'?'class="active"':'';?>><a href="alumnos.php"><i class="fa"></i>Alumnos</a></li>
            <li <?php echo $file=='inscripciones.php'?'class="active"':'';?>><a href="inscripciones.php"><i class="fa"></i>Inscripciones</a></li>
            <li class="<?php echo $file=='tipoEvento.php'|| $file=='horaEspecial.php'?'dropdown open':'dropdown';?>">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa"></i>Catalogos<b class="caret"></b></a>
              <ul class="dropdown-menu">
                 <li <?php echo $file=='tipoEvento.php'?'class="active"':'';?>><a href="tipoEvento.php">Tipo de Evento</a></li>
                <li <?php echo $file=='horaEspecial.php'?'class="active"':'';?>><a href="horaEspecial.php">Horario Especiales</a></li>
              </ul>
            </li>
             <li <?php echo $file=='herramientas.php'?'class="active"':'';?>><a href="herramientas.php"><i class="fa"></i>Herramientas</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </nav>