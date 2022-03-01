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
  <div class="load_icon" class="justify-content-center">
    <img src="view/img/loading.gif" alt="">
  </div>
    <div  style="background:#ffff ;background-image: url('view/img/element.png');background-size:contain;" class="z-depth-1">

    <header class="mb-0 espacio">
        <?php require("view/base/menu.php"); ?>
        <!--Section: Main info-->
  
      <section class="wow fadeIn z-depth-1 py-4" id="barra_buscador">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h4 class="text-uppercase text-white text-center">Registro de  la Clinica</h4>
              </div>
          </div>
        </div>
        </section>
      </header>
        <!-- <div  style="background:#ffff ;background-image: url('./view/img/element.png');background-size:contain;" class="z-depth-1"> -->
         <div class="container">
          <ul class="nav nav-tabs nav-justified md-tabs bg-white" id="myTabJust" role="tablist">
            <li class="nav-item">
              <a class="nav-link text-primary font-weight-bold active" id="datos_tab_p" data-toggle="tab" href="#datos_p" role="tab" aria-controls="home-just"
                aria-selected="true">Datos personales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info font-weight-bold" id="datos_tab_acess" data-toggle="tab" href="#datos_acess" role="tab" aria-controls="profile-just"
                aria-selected="false">Datos de acceso</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info font-weight-bold" id="datos_tab_laborales" data-toggle="tab" href="#datos_laborales" role="tab" aria-controls="contact-just"
                aria-selected="false">Datos de la Empresa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-info font-weight-bold" id="datos_tab_contacto" data-toggle="tab" href="#datos_contacto" role="tab" aria-controls="contact-just"
                aria-selected="false">Datos de contacto</a>
            </li>
          </ul>
          <div class="tab-content card pt-5" id="myTabContentJust">
            <div class="tab-pane fade show active" id="datos_p" role="tabpanel" aria-labelledby="datos_tab_p">
              <!-- formulario -->
            <div class="row mt-4">
              
                <div class="col-md-12 mb-4">
                        <div class="m-3">
                           <div class="mt-4">
                           <h6>Este apartado es para tener información personal del médico encargado</h6>
                           </div>
                            <div class="row">
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_nombre">Nombre</label>
                                    <input type="text" class="form-control" id="i_nombre"  aria-describedby="nombre" placeholder="Nombre">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_apellidop">Apellido Paterno</label>
                                    <input type="text" class="form-control" id="i_apellidop"  aria-describedby="apellido_paterno" placeholder="Apellido Paterno">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_apellidom">Apellido Materno</label>
                                    <input type="text" class="form-control" id="i_apellidom"  aria-describedby="apellido_materno" placeholder="Apellido Materno">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_cedula">No. Cedúla</label>
                                    <input type="text" class="form-control" id="i_cedula"  aria-describedby="cedula" placeholder="Cedúla">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_rsocial">Razón social</label>
                                    <input type="text" class="form-control" id="i_rsocial"  aria-describedby="razon_social" placeholder="Razón Social">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_tel">Telefóno</label>
                                    <input type="text" class="form-control" id="i_tel"  aria-describedby="telefono" placeholder="Telefóno">
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="form-group">
                                    <label for="i_rfc">RFC</label>
                                    <input type="text" class="form-control" id="i_rfc"  aria-describedby="rfc" placeholder="RFC">
                                  </div>
                                </div>
                                <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="i_domicilio">Domicilio</label>
                                    <input type="text" class="form-control" id="i_domicilio"  aria-describedby="user" placeholder="Domicilio">
                                  </div>
                                </div>
                                <div class="col-md-12 flex-center">
                                  <button class="btn  btn-cyan font-weight-bold" onclick="next_dp()">Siguiente<i class="fas fa-angle-double-right m-1"></i></button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>  
            </div>
            <div class="tab-pane fade" id="datos_acess" role="tabpanel" aria-labelledby="datos_tab_acess">
              <!-- formulario -->
            <div class="row mt-4">
              <div class="col-md-12 mb-4">
                      <div class="m-3">
                          <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_user">Nombre de Usuario</label>
                                  <input type="text" class="form-control" id="i_user"  aria-describedby="user" placeholder="Usuario">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <label for="i_email">Correo electrónico</label>
                                <input type="email" class="form-control" id="i_email"  aria-describedby="emailHelp" placeholder="Correo">
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_pass">Contraseña</label>
                                  <input type="password" class="form-control" id="i_pass"  aria-describedby="pass" placeholder="Contraseña">
                                  <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                    Su contraseña debe tener al menos 8 carácteres y al menos un número y una letra
                                  </small>
                                </div>
                              </div>
                              <div class="col-md-12 flex-center">
                                <button class="btn  btn-cyan font-weight-bold" onclick="back_dacess()"><i class="fas fa-angle-double-left m-1"></i>Anterior</button>
                                <button class="btn  btn-cyan font-weight-bold" onclick="next_dacess()">Siguiente<i class="fas fa-angle-double-right m-1"></i></button>
                              </div>
                          </div>
                      </div>
              </div>
          </div> 
            </div>
            <div class="tab-pane fade" id="datos_laborales" role="tabpanel" aria-labelledby="datos_tab_laborales">
                 <!-- formulario -->
            <div class="row mt-4">
              <div class="col-md-12 mb-4">
                      <div class="m-3">
                          <div class="row">
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_clinica">Nombre de la clinica</label>
                                  <input type="text" class="form-control" id="i_clinica"  aria-describedby="clinica" placeholder="Nombre clinica">
                                  <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                  Nombre del lugar o clinica como es conocido
                                </small>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_estado">Estado</label>
                                  <input type="text" class="form-control" id="i_estado"  aria-describedby="clinica" placeholder="Estado">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_municipio">Municipio</label>
                                  <input type="text" class="form-control" id="i_municipio"  aria-describedby="Municipio" placeholder="Municipio">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_calle">Calle</label>
                                  <input type="text" class="form-control" id="i_calle"  aria-describedby="calle" placeholder="Calle">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_numero">Número</label>
                                  <input type="text" class="form-control" id="i_numero"  aria-describedby="numero" placeholder="Numero">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_localidad">Colonia</label>
                                  <input type="text" class="form-control" id="i_localidad"  aria-describedby="localidad" placeholder="Colonia">
                                </div>
                              </div>
                              <div class="col-md-4">
                                <div class="form-group">
                                  <label for="i_cp">Código Postal</label>
                                  <input type="text" class="form-control" id="i_cp"  aria-describedby="cp" placeholder="Código Postal">
                                </div>
                              </div>
                              <div class="col-md-12 flex-center">
                                <button class="btn  btn-cyan font-weight-bold" onclick="back_laborales()"> <i class="fas fa-angle-double-left m-1"></i>Anterior</button>
                                <button class="btn  btn-cyan font-weight-bold" onclick="next_laborales()">Siguiente<i class="fas fa-angle-double-right m-1"></i></button>
                              </div>
                          </div>
                      </div>
              </div>
          </div>
            </div>
            <div class="tab-pane fade" id="datos_contacto" role="tabpanel" aria-labelledby="datos_tab_contacto">
              <!-- formulario -->
         <div class="row mt-4">
           <div class="col-md-12 mb-4">
                   <div class="m-3">
                       <div class="row">
                           <div class="col-md-4">
                             <div class="form-group">
                               <label for="i_sitio">Sitio</label>
                               <input type="text" class="form-control" id="i_sitio"  aria-describedby="sitio" placeholder="URL del Sitio">
                             </div>
                           </div>
                           <div class="col-md-4">
                            <div class="form-group">
                              <label for="i_facebook">Facebook</label>
                              <input type="text" class="form-control" id="i_facebook"  aria-describedby="facebbok" placeholder="URL del Facebook">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="i_instagram">Instagram</label>
                              <input type="text" class="form-control" id="i_instagram"  aria-describedby="instagram" placeholder="URL del Instagram">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="i_tel1">Telefóno 1</label>
                              <input type="text" class="form-control" id="i_tel1"  aria-describedby="tel1" placeholder="Telefóno 1">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="i_tel2">Telefóno 2</label>
                              <input type="text" class="form-control" id="i_tel2" aria-describedby="tel2" placeholder="Telefóno 2">
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                              <label for="i_whats">Whatsaap</label>
                              <input type="text" class="form-control" id="i_whats" aria-describedby="tel2" placeholder="Numero de Whatsaap">
                            </div>
                          </div>
                          <div class="col-md-8">
                            <div class="form-group">
                              <label for="i_geo">Geolocalización</label>
                              <input type="text" class="form-control" id="i_geo"  aria-describedby="geo" placeholder="URL de Geolocalización">
                              <small id="defaultRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                                La URL se puede tomar de Google Maps opción insertar mapa
                              </small>
                            </div>
                          </div>
                          <div class="col-md-12 flex-center">
                            <button class="btn  btn-cyan font-weight-bold" onclick="back_contacto()"><i class="fas fa-angle-double-left m-1"></i>Anterior</button>
                            <button class="btn  btn-cyan font-weight-bold" id="btn-insert">Finalizar<i class="fas fa-angle-double-right m-1"></i></button>
                          </div>
                       </div>
                   </div>
           </div>
       </div>
     </div>
   </div>
 </div>
     
    <footer class="mt-5">
         <!-- footer -->
         <?php require("view/base/footer.php"); ?>
         <?php require("view/base/script.php"); ?>
         <script src="view/js/tabs.js"></script>
         <script type="text/javascript" src="controller/cuentam-controller.js"></script>
    </footer>
</div>
</body>
</html>