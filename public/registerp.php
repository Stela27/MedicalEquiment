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
    <div style="background:#ffff ;background-image: url('view/img/element.png');background-size:contain;"
        class="z-depth-1">

        <header class="mb-0 espacio">
            <?php require("view/base/menu.php"); ?>
            <!--Section: Main info-->

            <section class="wow fadeIn z-depth-1 py-4" id="barra_buscador">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4 class="text-uppercase text-white text-center">Registro de Paciente</h4>
                        </div>
                    </div>
                </div>
            </section>
        </header>
        <!-- <div  style="background:#ffff ;background-image: url('./view/img/element.png');background-size:contain;" class="z-depth-1"> -->
        <div class="container">

            <ul class="nav nav-tabs nav-justified md-tabs bg-white" id="myTabJust" role="tablist">
                <li class="nav-item">
                    <a class="nav-link text-primary font-weight-bold active" id="datos_tab_p" data-toggle="tab"
                        href="#datos_p" role="tab" aria-controls="home-just" aria-selected="true">Datos personales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-info font-weight-bold" id="datos_tab_acess" data-toggle="tab"
                        href="#datos_acess" role="tab" aria-controls="profile-just" aria-selected="false">Datos de
                        acceso</a>
                </li>
            </ul>
            <div class="tab-content card pt-5" id="myTabContentJust">
                <div class="tab-pane fade show active" id="datos_p" role="tabpanel" aria-labelledby="datos_tab_p">
                    <!-- formulario -->
                    <div class="row mt-4">
                        <div class="col-md-12 mb-4">
                            <div class="m-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="i_nombre">Nombre</label>
                                            <input type="text" class="form-control" id="i_nombre" 
                                            onkeypress="return soloLetras(event)" maxlength="60" aria-describedby="nombre" placeholder="Nombre">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="i_apellidop">Apellido Paterno</label>
                                            <input type="text" class="form-control" id="i_apellidop" 
                                            onkeypress="return soloLetras(event)" maxlength="60" aria-describedby="apellido_paterno" placeholder="Apellido Paterno">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="i_apellidom">Apellido Materno</label>
                                            <input type="text" class="form-control" id="i_apellidom" 
                                            onkeypress="return soloLetras(event)" maxlength="60" aria-describedby="apellido_materno" placeholder="Apellido Materno">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="i_tel">Telefóno</label>
                                            <input type="text" class="form-control" id="i_tel" 
                                            onkeypress="return soloNumeros(event)" maxlength="15" aria-describedby="telefono" placeholder="Telefóno">
                                        </div>
                                    </div>
                                    <div class="col-md-12 flex-center">
                                        <button class="btn  btn-cyan font-weight-bold" onclick="next_dp()">Siguiente<i
                                                class="fas fa-angle-double-right m-1"></i></button>
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
                                            <input type="text" class="form-control" id="i_user"
                                            onkeypress="return soloLetras(event)" maxlength="60" aria-describedby="user" placeholder="Usuario">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="i_email">Correo electrónico</label>
                                        <input type="email" class="form-control" id="i_email"
                                        maxlength="60" aria-describedby="emailHelp" placeholder="Correo">
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="i_pass">Contraseña</label>
                                            <input type="password" class="form-control" id="i_pass"
                                            maxlength="30" aria-describedby="pass" placeholder="Contraseña">
                                            <!-- <button><span class="fa fa-eye-slash icon"></span></button> -->
                                            <small id="defaultRegisterFormPasswordHelpBlock"
                                                class="form-text text-muted mb-4">
                                                Su contraseña debe tener al menos 8 carácteres y al menos un número y
                                                una letra
                                            </small>
                                        </div>
                                    </div>
                                    <div class="col-md-12 flex-center">
                                        <button class="btn  btn-cyan font-weight-bold" onclick="back_dacess()"><i
                                                class="fas fa-angle-double-left m-1"></i>Anterior</button>
                                        <button id="btn-insert" class="btn  btn-cyan font-weight-bold">Finalizar<i
                                                class="fas fa-angle-double-right m-1"></i></button>
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
            <script type="text/javascript" src="controller/cuenta-controller.js"></script>
        </footer>
    </div>
</body>

</html>