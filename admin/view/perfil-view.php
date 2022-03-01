<!DOCTYPE html>
<html lang="es">
<?php require("base/head.php"); ?>
<body class="grey lighten-3">
  <div class="load_icon" class="justify-content-center">
    <img src="img/loading.gif" alt="">
</div>
  <!--Main Navigation-->
  <header>
    <!-- Navbar -->
    <?php require("base/nav.php");?>
    <!-- Navbar -->
    <!-- Sidebar -->
    <?php require("base/menu.php"); ?>
    <!-- Sidebar -->
      <!-- estilo perfil -->
      <link rel="stylesheet" href="css/perfil.css">
      <!-- estilo perfil -->
  </header>
  <!--Main Navigation-->
  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
     
     <a class="btn-floating btn-lg btn-info" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-user-edit"></i></a>

      <div class="row wow fadeIn justify-content-center">
        <div class="col-md-5 mb-4">
          <!-- Card -->
        <div class="card testimonial-card">

            <!-- Background color -->
            <div class="card-up card-image f-tamanio">
              <div class="fondo-perfil h-100 p-3 white-text font-weight-bold">
              </div>
            </div>

            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img id="img_perfil" class="rounded-circle" style="width: 172px; height: 172px; position: relative; z-index: 99; margin-top: 21px;    border: 5px solid #fff;" alt="woman avatar">
            </div>

            <!-- Content -->
            <div class="card-body px-3 py-4">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <p class="font-weight-normal mb-0" id="usuario"></p>
                  <p class="small mb-0" id="tipo"></p>
                </div>
               
                
              </div>
            </div>

          </div>
          <!-- Card -->
        </div>
      </div>  
     
      <div class="row mt-5">
        </div>
        </div>
      </div>
      <!--Grid row-->
    </div>
  </main>
 <!-- Addd  -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header info-color-dark">
        <h5 class="modal-title text-white" id="exampleModalLabel">Editar Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form class="text-center" style="color: #757575;" action="#!" id="frm_update">
             <div class="row">
                    <div class="col-md-6">
                        <div class="md-form mt-2">
                            <input type="text" id="u-nombre" name="txt-nombre"
                                class="form-control" onkeypress="return soloLetras(event)" maxlength="60">
                            <label for="nombre">Nombre</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                      <div class="md-form mt-2">
                          <input type="text" id="u-ap" name="txt-ap"
                              class="form-control" onkeypress="return soloLetras(event)" maxlength="60">
                          <label for="ap">Apellido Paterno</label>
                      </div>
                  </div>
                  <div class="col-md-6">
                    <div class="md-form mt-2">
                        <input type="text" id="u-am" name="txt-am"
                            class="form-control" onkeypress="return soloLetras(event)" maxlength="60">
                        <label for="am">Apellido Materno</label>
                    </div>
                </div>
                <div class="col-md-6">
                  <div class="md-form mt-1">
                      <input type="text" id="u-tel" name="txt-tel"
                          class="form-control" onkeypress="return soloNumeros(event)" maxlength="15">
                      <label for="tel">Telefóno</label>
                  </div>
              </div>
                <div class="col-md-6">
                  <div class="md-form mt-2">
                      <input type="text" id="u-usuario" name="txt-usuario"
                          class="form-control"  maxlength="60">
                      <label for="usuario">Usuario</label>
                  </div>
              </div>
                <div class="col-md-6">
                  <div class="md-form mt-1">
                      <input type="email" id="u-correo" name="txt-correo"
                          class="form-control" maxlength="60">
                      <label for="correo">Correo</label>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="md-form mt-1">
                    <input type="password" id="u-pass" name="txt-pass"
                        class="form-control" maxlength="60">
                    <label for="pass">Contraseña</label>
                </div>
            </div>
            <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text border-info" id="subir">Foto de perfil</span>
                  </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="fil_user" id="img"
                      aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label border-info" for="img">Seleccionar foto</label>
                  </div>
                </div>
          </div>
        </form>   
      </div>
      <div class="modal-footer">
        <button type="button" id="btn-update" class="btn btn-elegant btn-sm" data-dismiss="modal">Guardar</button>
      </div>
    </div>
  </div>
</div>
  <!--Footer-->
 <?php //require("base/footer.php"); ?>
<?php require("base/script.php"); ?>
<script type="text/javascript" src="../controller/perfil-controller.js"></script>
</body>

</html>
