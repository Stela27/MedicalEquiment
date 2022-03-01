<!DOCTYPE html>
<html lang="es">
<?php require("base/head.php"); ?>
<link href="css/stylebase.css" rel="stylesheet" type="text/css" />

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
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <div class="row wow fadeIn">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped tbl_d" id="dt_table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Clave</th>
                                            <th>Fecha de agenda</th>
                                            <th>Paciente</th>
                                            <th>Telefóno</th>
                                            <th>Correo</th>
                                            <th>Fecha de cita</th>
                                            <th>Hora</th>
                                            <th>Comentario del Doctor</th>
                                            <th>Estatus</th>
                                            <th></th>
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
        <!-- Addd editar -->
        <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header blue-gradient-rgba">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Comentario</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="text-left" action="#!" id="frm_update">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form mt-2">
                                        <input type="text" id="u-comentario" name="txt-comentario"
                                            class="form-control" onkeypress="return soloLetras(event)" maxlength="500">
                                        <label for="comentario">Comentario</label>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btn-update" class="btn btn-elegant btn-sm"
                            data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!--Footer-->
    <?php  //require("base/footer.php"); ?>
    <?php require("base/script.php"); ?>
    <script type="text/javascript" src="../controller/agenadac-controller.js"></script>
</body>

</html>