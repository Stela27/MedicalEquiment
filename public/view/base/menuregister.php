<nav id="fondo-menu" class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar indigo">
   
   <div class="container">

     <!-- Brand -->
     <a class="navbar-brand  font-weight-bold medical-texto" href="index.php" >
       <strong> <?php if(isset($_SESSION["datos"])){ echo $_SESSION["datos"]["nombre"];}else{?>Medical Equipment<?php } ?></strong>
     </a>

     <!-- Collapse -->
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
       aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
     </button>
     <!-- Links -->
     <div class="collapse navbar-collapse" id="navbarSupportedContent">

       <!-- Left -->
       <ul class="navbar-nav mr-auto">
        
       </ul>

       <ul class="navbar-nav nav-flex-icons">
        
        <?php if(isset($_SESSION["datos"])){ ?>
         <li class="nav-item">
           <a class="nav-link  font-weight-bold text-color" id="_close">Cerrar Sesión</a>
         </li>
        <?php }else{ ?>
         <li class="nav-item">
           <a href="index.php"  class="nav-link font-weight-bold text-color">Inicio</a>
         </li>
        
         <li class="nav-item">
           <a href="sesion.php" class="nav-link font-weight-bold text-color">Iniciar Sesión</a>
         </li>
        <?php } ?>

       </ul>

     </div>

   </div>
 </nav>