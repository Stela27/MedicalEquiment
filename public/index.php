<!DOCTYPE html>
<html lang="es">
  <head>
    <?php require("view/base/head.php");?>
      <!-- body  lista de estudios -->
      <link rel="stylesheet" href="view/css/styleindex.css">
      <!-- menu -->
      <link rel="stylesheet" href="view/css/style.css">
      <!-- libreria de carrucel -->
      <link rel="stylesheet" href="view/css/_carrucel/owl.carousel.min.css">
      <link rel="stylesheet" href="view/css/_carrucel/owl.theme.default.min.css">
  </head>
  <body>
    <div class="load_icon" class="justify-content-center">
      <img src="view/img/loading.gif" alt="">
    </div>
    <header>
      <!-- menu -->
      <?php require("view/base/menu.php"); ?>
       <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
      </ol>
      <!--/.Indicators-->

      <!--Slides-->
      <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
          <div class="view"
            style="background-image: url('view/img/slider/medical-slide-2.jpg');background-repeat: no-repeat; background-size: cover;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-white-strong d-flex justify-content-start align-items-center">

              <div class="container">
                <div class="text-left white-text mx-md-5 mx-lg-5 wow fadeIn mt-5">
                  <h1 class="blue-text font-weight-bold line-h1 mb-3">Busca el estudio que necesitas</h1>

                  <h4 class="mb-4 elegant-ic">
                    Contamos con variedad estudios evalúa el precio y agenda tu cita
                  </h4>
                </div>
              </div>
            </div>
            <!-- Mask & flexbox options-->
          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view"
            style="background-image: url('view/img/slider/medical-slide-2.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-white-strong d-flex justify-content-start align-items-center">

              <div class="container">
                <div class="text-left white-text mx-md-5 mx-lg-5 wow fadeIn mt-5">
                  <h1 class="blue-text font-weight-bold line-h1">Best & free guide of responsive web design</h1>

                  <h4 class="mb-4 elegant-ic">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis temporibus, ad quasi incidunt
                    laborum ipsam.
                  </h4>
                </div>
              </div>
            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view"
            style="background-image: url('view/img/slider/medical-slide-3.jpg'); background-repeat: no-repeat; background-size: cover;">

            <!-- Mask & flexbox options-->
            <div class="mask rgba-white-strong d-flex justify-content-start align-items-center">

              <div class="container">
                <div class="text-left white-text mx-md-5 mx-lg-5 wow fadeIn mt-5">
                  <h1 class="blue-text font-weight-bold line-h1">Best & free guide of responsive web design</h1>

                  <h4 class="mb-4 elegant-ic">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis temporibus, ad quasi incidunt
                    laborum ipsam.
                  </h4>
                </div>
              </div>
            </div>
            <!-- Mask & flexbox options-->

          </div>
        </div>
        <!--/Third slide-->
      </div>
      <!-- buscadores -->
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">

      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      </a>
    </div>
    </header>
    <main class="fondo-blanco">
        <!--Section: Main info-->
    <section class="wow fadeIn">
      <div  style="background:#2196f3;" class="z-depth-1">
        <div class="container">
          <div class="row">
            <div class="col-md-5 col-sm-5 col-lg-5">
              <label class="active text-white p-0 mt-4 mb-0" for="search12">Estudio que deseas buscar</label>
              <div class="md-form md-outline d-flex justify-content-between align-items-center">
                <input type="text" id="nombre_" class="form-control bg-white p-1" placeholder="Ejem.Rayos x">
              </div>
            </div>
            <div class="col-md-5 col-sm-5 col-lg-5">
              <label class="active text-white p-0 mt-3 mb-0" for="search12">¿En donde te encuentras?</label>
              <div class="md-form md-outline d-flex justify-content-between align-items-center mb-3">
                <input type="text" id="search12" class="form-control  bg-white p-1 " placeholder="Ejem.Monterrey">
                <a href="#!"  style="background-color:#11D2CB" class="btn btn-flat btn-md p-2 waves-effect ml-0 mb-3"><i class="fas fa-search fa-lg"></i></a>
              </div>
           </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQs Start -->
    <section id="valores">
                <div class="faqs">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="section-header">
                                    <h2>Especialidades</h2>
                                </div>
                                <img src="view/img/fondo_quehacer.svg" alt="Image">
                            </div>
                            <div class="col-md-7">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                                <span>1</span>Busca por estudio y el lugar el cual te encuentras
                                            </a>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body">
                                                Respetamos tus puntos de vista y hacemos híncapie a tus necesidades
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseTwo">
                                                <span>2</span> Comunicación Clara y Honesta
                                            </a>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Nuestro objetivo es que nuestra manera de expresar sea detallada si conoces o no del tema  te ayudamos a resolver tus dudas
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseThree">
                                                <span>3</span> Responsabilidad Laboral
                                            </a>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Los productos culminados cuentan con lo solicitado de acuerdo a los requisitos solicitados
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>4</span> Evaluación Autocritica
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFour">
                                                <span>5</span> Integridad
                                            </a>
                                        </div>
                                        <div id="collapseFour" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="card">
                                        <div class="card-header">
                                            <a class="card-link" data-toggle="collapse" href="#collapseFive">
                                                <span>6</span> Constancia y Disciplina
                                            </a>
                                        </div>
                                        <div id="collapseFive" class="collapse" data-parent="#accordion">
                                            <div class="card-body">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non.
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- FAQs End -->

    <!-- carrousel -->
    <!-- ************************************************************ -->
    <section class="mt-5 mb-3 ml-2 fondo-blanco">
      <!-- <div class="title-block text-center font-weight-bold text-uppercase">
        <h2>¿Qué debo hacer?</h2>
      </div> -->
      <div class="section-header text-center">
        <h2>Beneficios</h2>
    </div>
      <div id="c_miembros" class="owl-carousel owl-theme justify-content-center">
        <!-- card 1 -->
        <!-- <div class="item">
          <div class="card testimonial-card mb-3 services-list">
            <div class="card-up2"></div>
            <div class="avatar mx-auto">
              <i class="fas fa-address-card tamanio m-2"></i>
            </div>
            <div class="card-body text-center">
              <div class="h_altura">
                <h4 class="card-title text-cafe font-weight-bold">Registrarse</h4>
              </div>

              <p class="elegant-ic line-text">LLena el formulario con tus datos personales básicos
              </p>
            </div>
          </div>
        </div> -->
        <!-- card 1 -->
        <!-- card 2 -->
        <!-- <div class="item">
          <div class="card testimonial-card mb-3 services-list">
            <div class="card-up2"></div>
            <div class="avatar mx-auto">
              <i class="fas fa-user-circle tamanio m-2"></i>
            </div>
            <div class="card-body text-center">
              <div class="h_altura">
                <h4 class="card-title text-cafe font-weight-bold">Iniciar sesión</h4>
              </div>

              <p class="elegant-ic line-text">Ingresa con tu correo electrónico proporcionado y tu contraseña
              </p>
            </div>
          </div>
        </div> -->
        <!-- card 2 -->
        <!-- card 3 -->
        <div class="item">
          <div class="card testimonial-card mb-3 services-list">
            <div class="card-up2"></div>
            <div class="avatar mx-auto">
              <!-- <img src="view/img/logooo.png" class="rounded-circle" alt="woman avatar"> -->
              <i class="fas fa-search tamanio m-2"></i>
            </div>
            <div class="card-body text-center">
              <div class="h_altura">
                <h4 class="card-title text-cafe font-weight-bold">Buscar un estudio</h4>
              </div>
              <p class="elegant-ic line-text">Busca por estudio y el lugar el cual te encuentras
              </p>
            </div>
          </div>
        </div>
        <!-- card 3 -->
        <!-- card 4 -->
        <div class="item">
          <div class="card testimonial-card mb-3 services-list">
            <div class="card-up2"></div>
            <div class="avatar mx-auto">
              <!-- <img src="view/img/logooo.png" class="rounded-circle" alt="woman avatar"> -->
              <i class="fas fa-address-book tamanio m-2"></i>
            </div>
            <div class="card-body text-center">
              <div class="h_altura">
                <h4 class="card-title text-cafe font-weight-bold">Agendar</h4>
              </div>

              <p class="elegant-ic line-text">Para poder agendar debes tener una cuenta y haber iniciado sesión
              </p>
            </div>
          </div>
        </div>
        <!-- card 4 -->
        <!-- card 5 -->
        <div class="item">
          <div class="card testimonial-card mb-3 services-list">
            <div class="card-up2"></div>
            <div class="avatar mx-auto">
              <!-- <img src="view/img/logooo.png" class="rounded-circle" alt="woman avatar"> -->
              <i class="fas fa-edit tamanio m-2"></i>
            </div>
            <div class="card-body text-center">
              <div class="h_altura">
                <h4 class="card-title text-cafe font-weight-bold">Administrar</h4>
              </div>
              <p class="elegant-ic line-text">Podrás modificar datos de tu perfil y ver el registo de agenda
              </p>
            </div>
          </div>
        </div>
        <!-- card 5 -->
        <!-- card 6 -->
        <div class="item">
          <div class="card testimonial-card mb-3 services-list">
            <div class="card-up2"></div>
            <div class="avatar mx-auto">
              <!-- <img src="view/img/logooo.png" class="rounded-circle" alt="woman avatar"> -->
              <i class="fas fa-envelope tamanio m-2"></i>
            </div>
            <div class="card-body text-center">
              <div class="h_altura">
                <h4 class="card-title text-cafe font-weight-bold">Notificación</h4>
              </div>
              <p class="elegant-ic line-text">Se hará llegar un correo con los datos de agenda
              </p>
            </div>
          </div>
        </div>
        <!-- card 6 -->
      </div>
    </div>
    </section>

    <!-- ******************************* -->
    <!-- ******************************* -->
    <section>
      <div class="container section-beneficios-doctor">
        <div class="row">
          <div class="col-md-6">
            <div class="imagen-doctor">
              <img src="view/img/doctors_clinica.svg" alt="">
            </div>
          </div>
          <div class="col-md-6 mover-flex-card">
            <!-- Card -->
            <div class="card">
              <!--Card content-->
              <div class="card-body">
                <!--Title-->
                <h4 class="card-title">¿Tienes una clinica?</h4>
                <!--Text-->
                <p class="card-text">Forma parte de la gran comunidad que ofrecen un amplia variedad de estudios.</p>
                <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
                <a class="btn-medico" href="registerm.php">Mas información</a>
                <!-- <button type="button" class="btn btn-primary"  href="registerm.php">Registrarse</button> -->
              </div>
            </div>
            <!-- Card -->
          </div>
         </div>
      </div>
    </section>


    <!-- Service Start -->
    <section id="somos">
            <div class="service">
                <div class="container">
                    <div class="section-header">
                        <h2>¿Que hacemos?</h2>
                        <p>Somos una empresa especializada en </p>
                        <p>Promover tus servicios y productos</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="view/img/bisne1.jpg" alt="Service">
                                <h3>Brindamos Estrategias</h3>
                                <p>
                                    Para Publicidad y tecnologia en tus Negocios
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="view/img/bisne2.jpg" alt="Service">
                                <h3>Metodología</h3>
                                <p>
                                   Que brinda asesoría continua y análisis de resultados
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img src="view/img/bisne3.jpg" alt="Service">
                                <h3>Solución</h3>
                                <p>
                                    Tendras resultados desde el primer mes no esperes mas
                                </p>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="service-item">
                                <img class="margen-img" src="view/img/logooo.png" alt="Service">
                                <h3>Quieres conocer más </h3>
                                <p>
                                    Deseas algo propio da clic en mas detalles y conoce todos los servicios
                                </p>
                                <a class="btn" href="https://nprende.com/">Mas información</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </section>
         <!-- Service End -->
         <!-- Modal login -->
         <div class="modal fade_login" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <h4 class="modal-title w-100 font-weight-bold text-negro">Accede a tu cuenta</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body mx-3">
                  <div class="md-form mb-5">
                    <i class="fas fa-envelope prefix text-negro"></i>
                    <input type="email" id="user" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-email" class="text-negro">Correo electrónico</label>
                  </div>

                  <div class="md-form mb-4">
                    <i class="fas fa-lock prefix text-negro"></i>
                    <input type="password" id="pass" class="form-control validate">
                    <label data-error="wrong" data-success="right" for="defaultForm-pass" class="text-negro">Contraseña</label>
                  </div>

                </div>
                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-default" id="btn-iniciar">Ingresar</button>
                </div>
                <div class=" md-form login-register mb-4">
                  <div class="col-lg-12 col-md-12">
                    <span class="text-negro text-center">Crear cuenta:</span>
                    <!-- <h6 class="text-negro text-center"></h6> -->
                    <a class="btn-re" href="registerp.php">Paciente</a>
                    <a class="btn-re" href="registerm.php">Clinica o Médico</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         <!-- termina modal login -->

    </main>
     <!-- footer -->
    <?php require("view/base/footer.php"); ?>
    <?php require("view/base/script.php"); ?>
    <!-- carrulce -->

    <script src="view/js/carrucel/owl.carousel.min.js"></script>
    <script src="view/js/carrucel/carrousel.js"></script>
    <script type="text/javascript" src="controller/sesion-controlle.js"></script>
      </body>
</html>
