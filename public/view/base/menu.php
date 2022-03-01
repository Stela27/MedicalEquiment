
<nav id="fondo-menu" class="navbar navbar-expand-lg navbar-dark primary-color fixed-top">

  <a class="navbar-brand medical-texto font-weight-bold" href="index.php"><strong>Medical Equipment</strong></a>

  <!-- Collapse button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link text-color font-weight-bold" href="#">¿Quienes somos?
          <span class="sr-only">(current)</span>
        </a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->

      <!-- Dropdown -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle  text-color font-weight-bold" id="navbarDropdownMenuLink" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">Registrarse</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="registerp.php">Paciente</a>
          <a class="dropdown-item" href="registerm.php">Clinica</a>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link text-color font-weight-bold mr-2" onclick="abrirlogin()">Acceder</a>
      </li>

    </ul>
    <!-- Links -->
  <!-- Collapsible content -->

</nav>
<!--/.Navbar-->  
   
  
  
  
  
  
  
  
  
  
  <!-- <nav id="fondo-menu" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar ">

    <div class="container">
      
      <a class="navbar-brand  font-weight-bold medical-texto mx-auto" href="index.php">
        <strong> <?php if (isset($_SESSION["datos"])) {
                    echo $_SESSION["datos"]["nombre"];
                  } else { ?>Medical Equipment<?php } ?></strong>
      </a>
      <div class="id_menu">

        <?php if (isset($_SESSION["datos"])) { ?>
            <a class="nav-link   text-color" id="_close">Cerrar Sesión</a>
        <?php } else { ?>
            <a href="#somos" class="text-color pr-1">¿Quienes somos?</a>
            <a  class="text-color pr-1">Registrarme</a>
            <a href="sesion.php" class=" text-color pr-1">Iniciar Sesión</a>
        <?php } ?>

      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

        </ul>

      </div>

    </div>
  </nav> -->

