<!DOCTYPE html>
<html lang="es">
<?php require("base/head.php"); ?>
<link href="css/stylebase.css" rel="stylesheet" type="text/css" />
<!-- css de calendario -->
<link rel="stylesheet" href="plugin_cita/css/calendar.css">
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
    </header>
    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div class="card">
                <div class="card-header">
                        <h5 style="color:#0099CC;font-size:25px;">Calendario de citas</h5>
                </div>
                <div class="card-body">
                    <div class="row m-5">
                    <div class="col-md-6">
                            <label for="especialidad" style="font-size: 16px;" class="m-0 p-0">Especialidad</label>
                                    <select class="custom-select custom-select-sm" id="i-especialidad" name="cmb-especialidad">
                                        <option value="0" disabled selected>Seleccione</option>
                                      </select>
                        </div>
                        <div class="col-md-6">
                            <label for="estudio" style="font-size: 16px;" class="m-0 p-0">Estudio</label>
                                    <select class="custom-select custom-select-sm" id="i-estudio" name="cmb-estudio">
                                        <option value="0" disabled selected>Seleccione</option>
                                      </select>
                        </div>
                        <div class="col-md-6">
                            <label for="direccion" style="font-size: 16px;" class="m-0 p-0">Clinica</label>
                                    <select class="custom-select custom-select-sm" id="i-clinica" name="cmb-direccion">
                                        <option value="0" disabled selected>Seleccione</option>
                                      </select>
                        </div>
                        <div class="col-md-6">
                            <label for="mes" style="font-size: 16px;" class="m-0 p-0">Mes</label>
                            <select class="custom-select custom-select-sm" id="mes" name="mes_">
                              <option selected value="0">-- Selecionar --</option>
                              <option value="1">Enero</option>
                              <option value="2">Febrero</option>
                              <option value="3">Marzo</option>
                              <option value="4">Abril</option>
                              <option value="5">Mayo</option>
                              <option value="6">Junio</option>
                              <option value="7">Julio</option>
                              <option value="8">Agosto</option>
                              <option value="9">Septiembre</option>
                              <option value="10">Octubre</option>
                              <option value="11">Noviembre</option>
                              <option value="12">Diciembre</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <button class="btn blue p-2 mt-4 text-white btn-btn-md" id="btn-llenar"><li class="fa fa-search text-white m-1"></li>Buscar</button>
                          </div>
                    </div>
                    <div class="row m-5">
                        <div class="col-md-12">
                             <!-- se muestra calendario -->
                        <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
        <!-- modal de citas-->
        <div class="modal fade" id="modal-view" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header blue-gradient-rgba">
                    <h5 class="modal-title text-white" id="exampleModalLabel">Horarios</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row wow fadeIn">
                        <div class="col-md-12 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm table-striped tbl_d" id="dt_table">
                                            <thead class="table-dark">
                                                <tr>
                                                    <th>Clave</th>
                                                    <th>Hora</th>
                                                    <th>Especialidad</th>
                                                    <th>Estudio</th>
                                                    <!-- <th>Fecha cita</th> -->
                                                    <th>Hora inicio</th>
                                                    <th>Hora termino</th>
                                                    <th>Estatus</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- fin modal -->
    </main>

    <!--Footer-->
    <?php  //require("base/footer.php"); ?>
    <?php require("base/script.php"); ?>
    <script src="plugin_cita/js/moment-with-locales.min.js"></script>
	<script src="plugin_cita/js/calendar.js"></script>
    <script type="text/javascript" src="../controller/cita-controller.js"></script>
</body>

</html>