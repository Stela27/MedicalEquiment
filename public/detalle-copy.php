<!DOCTYPE html>
<html lang="es">

<head>
  <?php require("view/base/head.php"); ?>
  <!-- body  lista de estudios -->
  <link rel="stylesheet" href="view/css/styleindex.css">
  <!-- menu -->
  <link rel="stylesheet" href="view/css/style.css">
  <!-- estilos del contenido -->
  <link rel="stylesheet" href="view/css/detalle-copy.css">
  <!-- calendario -->
  <link rel="stylesheet" href="view/plugin_calendar/css/calendar.css">
  <link rel="stylesheet" href="pluying/themes/classic/galleria-inline.classic.css">
  <!-- evaluar con estrellas -->
  <link rel="stylesheet" href="view/css/cloudflare.css">
  <link rel="stylesheet" href="view/css/starrr.css">
</head>

<body>
  <header>
    <?php require("view/base/menu.php");?>
  </header>
    <main>
      <section>
        <div class="container card-diseng">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <div class="card fondo-card">
                <div class="cardfondo-card-header">
                  <h5 class="text-center texto" id="nombre_d"></h5>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div id="galleria"></div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <p class="text-uppercase mb-2 texto"><strong><i class="fas fa-phone-alt ml-2 text-primary"></i></strong></p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <a href="">
                        <p style="font-size:16px;" class="text-muted mb-0 texto pb-lg-1" id="tel_d1"></p>
                      </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <p class="text-uppercase mb-2 texto"><strong><i class="fas fa-phone-alt ml-2 text-primary"></i></strong></p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <a href="">
                        <p style="font-size:16px;" class="text-muted mb-0 texto pb-lg-1" id="tel_d2"></p>
                      </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <p class="text-uppercase mb-2 texto"><strong><i class="fab fa-whatsapp text-primary ml-2"></i></strong></p>
                    </div>
                    <div class="col-lg-6 col-md-6">
                      <a href="" target="_blank">
                        <p class="text-muted mb-0 texto" id="whats"></p>
                      </a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12 text-center">
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
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="d-flex justify-content-center">
                        <button class="btn btn-comentario" id="btn-iniciar">Ver comentarios</button>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <div class="d-flex justify-content-center">
                        <button class="btn btn-agendar" id="btn-iniciar">Agendar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-8 col-md-8">
              <div class="card fondo-card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-lg-12 col-md-12">
                      <h6 class="font-weight-bold  texto mt-2">Descripción del Estudio</h6>
                      <p class="text-muted texto espaciado" id="desc_d"></p>
                    </div>
                    <div class="col-lg-12 col-md-12">
                      <div class="row">
                        <div class="col-md-3">
                          <!-- tipo estudio -->
                          <h6 class="font-weight-bold mb-2 texto">Especialidad</h6>
                          <p class="text-muted texto" id="tipo_d"></p>
                          <!-- fin tipo estudio -->
                        </div>
                        <div class="col-md-9">
                          <!-- descripcion especialidad -->
                          <h6 class="font-weight-bold mb-2 texto">Descripción</h6>
                          <p class="text-muted texto" id="des_especialidad"></p>
                          <!-- termina especialidad -->
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
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
                    <div class="col-lg-12 col-md-12">
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
                    </div>
                    <div class="col-lg-12 col-md-12">
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
                    <div class="col-lg-12 col-md-12">
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
                    </div>
                    <div class="col-lg-12 col-md-12">
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
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
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
  <!-- footer -->
  <?php require("view/base/footer.php"); ?>
</body>
</html>