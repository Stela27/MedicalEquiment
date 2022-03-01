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
            <a class="btn-floating btn-lg btn-info" data-toggle="modal" data-target="#modal-insert"><i
                    class="fas fa-notes-medical"></i></a>
            <div class="row wow fadeIn">
                <div class="col-md-12 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-sm table-striped tbl_d" id="dt_table">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Clave</th>
                                            <th>Especialidad</th>
                                            <th>Descripción</th>
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
        <!-- Addd estudio -->
        <div class="modal fade" id="modal-insert" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header blue-gradient-rgba">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Agregar Especialidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="text-left" action="#!" id="frm_insert">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="md-form mt-2">
                                        <input type="text" id="i-especialidad" name="txt-especialidad"
                                            class="form-control" onkeypress="return soloLetras(event)" maxlength="100">
                                        <label for="nombre">Especialidad</label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="md-form mt-1">
                                        <input type="text" id="i-descripcion" name="txt-descripcion"
                                            class="form-control" onkeypress="return soloLetras(event)" maxlength="100">
                                        <label for="tel">Descripción</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="font-size: 14px;" class="m-0 p-0">Estatus</label>
                                    <select class="custom-select custom-select-sm" id="i-status" name="cmb-status">
                                        <option value="" selected disabled>-- Selecionar --</option>
                                        <option value="1">Disponible</option>
                                        <option value="0">No disponible</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancelar</button>
                        <button type="button" id="btn-insert" class="btn btn-elegant btn-sm"
                            data-dismiss="modal">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Addd img -->
        <div class="modal fade" id="modal-update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header blue-gradient-rgba">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Editar Especialidad</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form class="text-left" action="#!" id="frm_update">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="md-form mt-2">
                                        <input type="text" id="u-especialidad" name="txt-especialidad"
                                            class="form-control" onkeypress="return soloLetras(event)" maxlength="100">
                                        <label for="nombre">Especialidad </label>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="md-form mt-1">
                                        <input type="text" id="u-descripcion" name="txt-descripcion"
                                            class="form-control" onkeypress="return soloLetras(event)" maxlength="100">
                                        <label for="tel">Descripción</label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <label for="" style="font-size: 14px;" class="m-0 p-0">Estatus</label>
                                    <select class="custom-select custom-select-sm" id="u-status" name="cmb-status">
                                        <option value="" selected disabled>-- Selecionar --</option>
                                        <option value="1">Disponible</option>
                                        <option value="0">No disponible</option>
                                    </select>
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
    <script type="text/javascript" src="../controller/especialidad-controller.js"></script>
</body>

</html>