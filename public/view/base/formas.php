<!--Modal: Login-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-primary" role="document">

    <!--Content-->
    <div class="modal-content text-center">
      <!-- <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
          <path d="M0.00,49.98 C125.00,267.92 350.73,52.78 500.00,49.98 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #08f;"></path>
        </svg>
        <p class="heading text-uppercase">Iniciar Sesión</p>
      </div> -->
      <!--Header-->
      <div class="modal-header d-flex justify-content-center" style="background:linear-gradient(33deg,#5ed6d2,#dbeff0)!important;">
        <p class="heading text-uppercase font-weight-bold" style="color:rgb(52,86,175);">Iniciar Sesión</p>
        
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-user-circle fa-4x animated rotateIn mb-4"></i>


        <div class="md-form">
          <input type="text" id="p_correo" class="form-control">
          <label for="p_correo">Cuenta de correo electrónico</label>
        </div>
        <div class="md-form">
          <input type="password" id="p_pass" class="form-control">
          <label for="p_pass">Contraseña</label>
        </div>
        <!-- <div id="alerta" class="alert alert-warning alert-dismissible fade" role="alert">
          <strong>Datos incorrectos!</strong> Verifica tu correo y contraseña
        </div> -->


      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <button class="btn btn-md" id="login" style="background-color:#2784ff; color:white;">Iniciar</button>
        <a type="button" class="btn  waves-effect btn-md" style="background-color:#4adfcc!important;" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>

<!-- Modal: registro -->
<div class="modal fade right" id="registro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="true" >
  <div class="modal-dialog modal-full-height modal-right modal-notify" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background:linear-gradient(33deg,#5ed6d2,#dbeff0)!important;">
        <p class="heading lead text-uppercase font-weight-bold " style="color:rgb(52,86,175)">Registro
        </p>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" style="color:rgb(52,86,175)">×</span>
        </button>
      </div>

      <!--Body-->
      <div class="modal-body">
        <div class="text-center">
          <i class="far fa-file-alt fa-4x mb-3 animated rotateIn " style="color:rgb(52,86,175)"></i>
          <p>
            <strong style="color:rgb(52,86,175)">Registro de cuenta</strong>
          </p>
        </div>

        <hr>

        <div class="md-form">
          <input type="text" id="nombre_r" class="form-control">
          <label for="nombre_r">Nombre</label>
        </div>
        <div class="md-form">
          <input type="tel" id="tel_r" class="form-control">
          <label for="tel_r">Número Telefónico</label>
        </div>
        <div class="md-form">
          <input type="tel" id="correo_r" class="form-control">
          <label for="correo_r">Cuenta de correo electrónico</label>
        </div>
        <div class="md-form">
          <input type="password" id="pass_r" class="form-control">
          <label for="pass_r">Contraseña</label>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer justify-content-center">
        <a type="button" class="btn  waves-effect waves-light" id="registro" style="background-color:#2784ff;">Enviar
          <i class="fa fa-paper-plane ml-1" ></i>
        </a>
        <!-- <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Cancelar</a> -->
        <a type="button" class="btn waves-effect" style="background-color:#4adfcc!important;" data-dismiss="modal">Cancelar</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalPoll -->