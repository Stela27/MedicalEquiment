<!DOCTYPE html>
<html lang="es">

<head>
  <?php require("view/base/head.php"); ?>
  <!-- body  lista de estudios -->
  <link rel="stylesheet" href="view/css/styleindex.css">
  <!-- menu -->
  <link rel="stylesheet" href="view/css/style.css">
  <!-- estilos del contenido -->
  <link rel="stylesheet" href="view/css/detalle.css">
  <!-- calendario -->
  <link rel="stylesheet" href="view/plugin_calendar/css/calendar.css">
  <link rel="stylesheet" href="pluying/themes/classic/galleria-inline.classic.css">
  <!-- evaluar con estrellas -->
  <link rel="stylesheet" href="view/css/cloudflare.css">
  <link rel="stylesheet" href="view/css/starrr.css">
</head>

<body>
  <div style="background:#ffff ;background-image: url('view/img/element.png');background-size:contain;" >

    <header class="mb-0 espacio">
      <?php require("view/base/menu.php"); ?>
      <!--Section: Main info-->
    </header>

    <main class="bg-transparent">
      <section class="bg-transparent">
        <!-- detalle estudio -->
        <div class="container-fluid p-4 bg-transparent">
          <div class="row">
            <div class="col-md-7 col-lg-7">
              <div class="row dasboard">
                <div class="col-12">
                  <div class="card cards">
                    <div class="card-body cbody">
                      <div class="row">
                        <div class="col-lg-12 col-md-6">
                          <h5 class="text-center font-weight-bold texto" id="nombre_d"></h5>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-lg-12 col-md-6">
                          <div id="galleria">
                            <!-- <img src="" id="imagenes"> -->
                            <!-- <img src="../admin/view/img/estudio_img/bisne1.jpg"> -->
                            <!-- <img src="view/img/bisne3.jpg"> -->
                          </div>
                        </div>
                      </div>

                      <h6 class="font-weight-bold  texto mt-2">Descripción del Estudio</h6>
                      <p class="text-muted texto espaciado" id="desc_d">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, voluptates beatae nulla ab saepe recusandae quam dicta temporibus nesciunt repudiandae ut amet. Placeat distinctio impedit eius, atque ipsa quaerat quae.</p>



                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4">
                              <!-- tipo estudio -->
                              <h6 class="font-weight-bold mb-2 texto">Especialidad</h6>
                              <p class="text-muted texto" id="tipo_d"></p>
                              <!-- fin tipo estudio -->
                            </div>
                            <div class="col-md-8">
                              <!-- descripcion especialidad -->
                              <h6 class="font-weight-bold mb-2 texto">Descripción</h6>
                              <p class="text-muted texto" id="des_especialidad"></p>
                              <!-- termina especialidad -->
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-12 text-center">
                              <!-- valoracion -->
                              <h6 class="font-weight-bold mb-2 texto">Evaluación</h6>
                              <i class="fas fa-star pr-2 star" data-mdb-toggle="tooltip " data-mdb-placement="top" title="Total : <?php echo $dat_eval['es1'] ?>"><span class="badge tam_num">1</span></i>
                              <i class="fas fa-star pr-2 star" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Total : <?php echo $dat_eval['es2'] ?>"><span class="badge  tam_num">2</span></i>
                              <i class="fas fa-star pr-2 star" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Total : <?php echo $dat_eval['es3'] ?>"><span class="badge  tam_num">3</span></i>
                              <i class="fas fa-star pr-2 star" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Total : <?php echo $dat_eval['es4'] ?>"><span class="badge  tam_num">4</span></i>
                              <i class="fas fa-star star" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Total : <?php echo $dat_eval['es5'] ?>"><span class="badge tam_num">5</span></i>
                              <h6 class="mt-2 texto">Opiniones</h6>
                              <!-- fin valoracion -->
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-6">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Nombre de la clinica</h6>
                              <p class="text-muted texto" id="nombre_c"><i class="fas fa-envelope pr-2 text-primary"></i></p>
                            </div>
                            <div class="col-md-6">
                              <!-- Aqui va correo -->
                              <!-- correo -->
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Correo electrónico</h6>
                              <p class="text-muted texto" id="coreeo"><i class="fas fa-envelope pr-2 text-primary"></i></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-4">
                          <p class=" mb-2 texto"><strong>Estado</strong></p>
                          <p class="text-muted mb-0 texto pb-lg-1 espaciado" id="direc_e"></p>
                        </div>
                        <div class="col-md-4">
                          <p class=" mb-2 texto"><strong>Municipio</strong></p>
                          <p class="text-muted mb-0 texto pb-lg-1 espaciado" id="direc_m"></p>
                        </div>
                        <div class="col-md-4">
                          <p class=" mb-2 texto"><strong>Colonia</strong></p>
                          <p class="text-muted mb-0 texto pb-lg-1 espaciado" id="direc_c"></p>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-4">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Calle</h6>
                              <p class="text-muted texto" id="calle"><i class="fas fa-envelope pr-2 text-primary"></i></p>
                            </div>
                            <div class="col-md-4">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Número</h6>
                              <p class="text-muted texto" id="num"><i class="fas fa-envelope pr-2 text-primary"></i></p>
                            </div>
                            <div class="col-md-4">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Código Postal</h6>
                              <p class="text-muted texto" id="cp"><i class="fas fa-envelope pr-2 text-primary"></i></p>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-4">
                              <p class="text-uppercase mb-2 texto"><strong> 1&deg; Telefono</strong></p>
                              <a href="">
                                <p style="font-size:16px;" class="text-muted mb-0 texto pb-lg-1" id="tel_d1"> <i class="fa fa-phone pr-2 w-18 text-primary"></i></p>
                              </a>
                            </div>
                            <div class="col-md-4">
                              <p class="text-uppercase mb-2 texto"><strong>2&deg; Telefono</strong></p>
                              <a href="">
                                <p style="font-size:16px;" class="text-muted mb-0 texto pb-lg-1" id="tel_d2"><i class="fa fa-phone pr-2 w-18 text-primary"></i></p>
                              </a>
                            </div>
                            <div class="col-md-4">
                              <p class="text-uppercase mb-2 texto"><strong>Whatsapp</strong></p>
                              <a href="" target="_blank">
                                <p class="text-muted mb-0 texto" id="whats"><i class="fab fa-whatsapp pr-2 text-success"></i></p>
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-12">
                          <div class="row">
                            <div class="col-md-4">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Sitio Oficial</h6>
                              <a href="" id="enlace_sitio" target="_blank" class="m-4"><img src="view/img/PNG/sphere.png"></a>

                              <!-- <p class="text-muted texto" id=""><i class="fas fa-envelope pr-2 text-primary"></i></p> -->
                            </div>
                            <div class="col-md-4">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Facebook</h6>
                              <a href="" id="enlace_facebook" target="_blank" class="m-4"><img src="view/img/PNG/facebook2.png"></a>
                              <!-- <p class="text-muted texto" id=""><i class="fab fa-facebook-square"></i></p> -->
                            </div>
                            <div class="col-md-4">
                              <h6 class="font-weight-bold mb-2 texto text-uppercase">Instagram</h6>
                              <a href="" id="enlace_instagram" target="_blank" class="m-4"><img src="view/img/PNG/instagram.png"></a>
                              <!-- <i class="fab fa-instagram"></i> -->
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <hr>
                          <div class="row mt-3 justify-content-center">
                            <div class="col-md-4 col-sm-6 text-center m-0 p-0">
                              <h4 class="font-weight-bold text-uppercase texto">Precio</h4>
                              <h3 id="precio">$</h3>
                            </div>
                            <div class="col-md-4 col-sm-6 text-center">
                              <h4 class="font-weight-bold text-uppercase texto">Precio</h4>
                              <h3 class="text-danger" id="precio_antes"><del>$</del></h3>
                            </div>

                            <div class="col-md-4 col-sm-6 text-center p-0 m-0">
                              <h4 class="font-weight-bold text-uppercase texto">Oferta</h4>
                              <h3 id="oferta">$800</h3>
                            </div>

                          </div>
                        </div>
                      </div>

                      <div class="row dasboard">
                        <div class="col-12 mt-4">
                          <div class="embed-responsive embed-responsive-16by9 img-thumbnail z-depth-1" id="mapa">
                          </div>
                          <img src="" id="mapa_img" width="40" height="40" class="w-100 img-thumbnail" alt="">
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-lg-5">
              <div class="row">
                <div class="col-md-12">
                  <div class="card mb-4 cards">
                    <div class="card-header border-bottom-0 cbody">
                      <!-- titulo -->
                      <h5 class="heading lead  text-center font-weight-bold m-0 p-0 texto">Horario de atención</h5>
                    </div>
                    <div class="card-body cbody">
                      <div class="row">
                        <div class="col-md-12">
                          <!-- calendario -->
                          <div id="calendar"></div>
                          <!-- termina calendario -->
                        </div>
                      </div>
                      <div class="row">
                        <!-- <div class="col-md-12">
                          <h5 class="heading lead text-center font-weight-bold p-0 m-0 texto">Agendar Estudio</h5>
                          <label for="" style="font-size: 16px; color:rgb(133, 135, 245);" class="m-0 p-0 font-weight-bold">Seleccione una fecha disponible marcada en azul</label>
                          <br>
                        </div> -->

                        <div class="col-md-6">
                          <label for="" style="font-size: 16px; color:rgb(19, 121, 253);" class="m-0 p-0 font-weight-bold mt-3">Fecha para citas </label>
                          <br>
                          <label id="fecha" class="font-weight-bold text-primary"></label>
                        </div>
                        <div class="col-md-6">
                          <label for="" style="font-size: 16px; color:rgb(19, 121, 253);" class="m-0 text-center p-0 font-weight-bold mt-3">Horas disponibles</label>
                          <select class="custom-select custom-select-sm" id="estudio">
                            <option selected value="0">-- Selecionar --</option>
                          </select>
                        </div>

                      </div>

                      <div class="row d-flex justify-content-center">
                        <div class="col-md-12 mt-2">
                          <button type="button" id="a_envia" class="btn btn-azul waves-effect waves-light  w-responsive btn-md"> <i class="fas fa-calendar-alt mr-1"></i>Agendar cita
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row comentarios bg-white">
                <div class="col-md-12">
                  <!-- <button class="btn btn-elegant btn-float bg-transparent" data-toggle="modal" data-target="#_fcometario" title="Comentar"><i class="fas fa-comment-alt fa-2x text-white"></i></button> -->
                  <button class="btn_ btn-md justify-content-center mb-1" type="button" data-toggle="modal" data-target="#_fcometario" title="Comentar">Escribir una opinión</button>
                  <!-- <form action="" class="d-flex justify-content-end flex-wrap">
                    <textarea class="form-comentarios" placeholder="Comparte tu experiencia"></textarea>
                    <button class="btn" type="button">Publicar</button>
                  </form> -->
                    <div id="foto"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- detalle estudio -->
      </section>
      <section>
        <!-- comentario -->
        <div class="modal fade right" id="_fcometario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true" data-backdrop="true">
        <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
          <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
              <p class="heading lead text-uppercase">Comentario</p>

              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true" class="white-text">×</span>
              </button>
            </div>

            <!--Body-->
            <div class="modal-body">
              <div class="text-center">
                <i class="far fa-3x mb-3 animated rotateIn fa-comment"></i>
            </div>

           <div class="md-form text-center">
                <h6>Este contenido será público</h6>
           </div>
           <br>
              <label for="">Evaluar</label>
              <div id="estrellas" style="font-size:26px;">
              </div><br> 

              <div class="md-form">
                <textarea type="text" id="c_comentarios" class="md-textarea form-control" rows="2"></textarea>
                <label for="c_comentarios">Comentarios</label>
              </div>
            </div>
            <!--Footer-->
            <div class="modal-footer justify-content-center">
              <button type="button" id="e_envia" class="btn btn-primary waves-effect waves-light btn-md">Enviar
                <i class="fa fa-paper-plane ml-1"></i>
              </button>
              <a type="button" class="btn_ btn-danger waves-effect btn-md" data-dismiss="modal">Cancelar</a>
            </div>
          </div>
        </div>
      </div>
      <!-- nueva -->
     </div>
      </section>
      <!-- calendario -->
     
      <?php require("view/base/script.php"); ?>
      <script src="pluying/galleria.js"></script>
      <script type="text/javascript" src="controller/detalle-controller.js"></script>
      <script src="view/plugin_calendar/js/moment-with-locales.min.js"></script>
      <script src="view/plugin_calendar/js/calendar.js"></script>
      <script src="view/js/detalle.js"></script>
      <!-- <script src="view/js/starrr.js"></script> -->

      <script>
        $(function() {
          // Load the classic theme
          Galleria.loadTheme('pluying/themes/classic/galleria.classic.js');
          // Initialize Galleria
          Galleria.run('#galleria');
        });
      </script>

    </main>
  </div>
</body>
<footer class="mt-5">
  <!-- footer -->
  <?php require("view/base/footer.php"); ?>
</footer>

</html>