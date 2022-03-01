<!DOCTYPE html>
<html lang="es">

<head>
  <?php require("view/base/head.php"); ?>
  <!-- body  lista de estudios -->
  <link rel="stylesheet" href="view/css/styleindex.css">
  <!-- menu -->
  <link rel="stylesheet" href="view/css/style.css">
</head>
<body>
    <div  style="background:#ffff ;background-image: url('img/element.png');background-size:contain;" class="z-depth-1">

    <header class="mb-0 espacio">
        <?php require("view/base/menu.php"); ?>
        <!--Section: Main info-->
  
    <section class="wow fadeIn z-depth-1 py-4" id="barra_buscador">
        <div class="container">
          <form action="">
          <div class="row">
            <div class="col-md-5 col-lg-5">
              <label class="active text-white p-0  mb-0" for="search12">Estudio que deseas buscar</label>
              <input  autocomplete="off" type="text" id="estudio_" class="form-control bg-white p-1" placeholder="Ejem.Rayos x">
              <ul id="lista_id"></ul>
            </div>
            <div class="col-md-5 col-lg-5">
              <label class="active text-white p-0  mb-0" for="search12">¿En donde te encuentras?</label>
              <input type="text" id="search" class="form-control  bg-white p-1 " placeholder="Ejem.Monterrey">
            </div> 
            <div class="col-md-2 col-sm-2 "><a href="#!" style="background-color:#11D2CB" class="btn btn-flat btn-md p-2 waves-effect mt-4" id="buscador"><i class="fas fa-search fa-lg" style="color: #00539c;"></i></a></div>
          </div>
        </form>
        </div>
      </section>
    </header>
      <section>
        <!-- <div  style="background:#ffff ;background-image: url('./view/img/element.png');background-size:contain;" class="z-depth-1"> -->
          <div class="container" id="lista_datos">
            <div class="row mt-4">
                <div class="col-md-12 mb-4">
                    <div class="card z-depth-1 bordered border-light">
                      <div id="filtro"></div>
                    </div>
                </div>
            </div>   
        </div>
      </section>
    <footer class="mt-5">
         <!-- footer -->
         <?php require("view/base/footer.php"); ?>
         <?php require("view/base/script.php"); ?>
         <script type="text/javascript" src="controller/lista-controller.js"></script>
    </footer>
</div>
</body>
</html>