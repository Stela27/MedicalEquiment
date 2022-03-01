<?php session_start();
require("modelo/ac_bd.php");
$query= new s_acciones;

if(!isset($_SESSION["datos"])){
 header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<?php require("base/head.php"); ?>

<style>
  #fechas_host,
  #fechas_domin,
  #datos_web,
  #p_medios {
    display: none;
  }

  #preview>img {
    width: 100%;
  }

  #load_img {
    display: none;
  }
</style>

<body class="grey lighten-3">

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
                <table class="table table-sm table-striped tbl_d" id="dtable">
                  <thead class="table-dark">
                    <tr>
                      <th>Nombre</th>
                      <th>Tipo</th>
                      <th>Descripción</th>
                      <th>Domicilio</th>
                      <th>Estatus</th>
                      <th class="text-center">Horarios</th>
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
  </main>


  <!-- Addd estudio -->
  <div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header blue-gradient-rgba">
          <h5 class="modal-title text-white" id="exampleModalLabel">Gestión de Horarios</h5>
          <button type="button" onClick="btnLimpiar()" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <form class="text-left" style="color: #757575;" id="horarios_gen">

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Lunes</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="lini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="lfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Martes</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="mini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="mfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Miercoles</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="mmini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="mmfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Jueves</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="jini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="jfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Viernes</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="vini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="vfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Sabado</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="sini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="sfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-2 text-left">
                <label for="" class="font-weight-bold">Domingo</label>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Entrada</label>
                <div class="md-form m-0">
                  <input type="time" id="dini" class="form-control p-0 veri">
                </div>
              </div>
              <div class="col-md-5 col-6">
                <label for="">Hora de Salida</label>
                <div class="md-form m-0">
                  <input type="time" id="dfin" class="form-control p-0 veri">
                </div>
              </div>
            </div>

          </form>

        </div>
        <div class="modal-footer">
          <button type="button" id="btn_save" class="btn btn-elegant btn-sm">Guardar</button>
        </div>
      </div>
    </div>
  </div>




  <!--Footer-->
  <?php // require("base/footer.php"); ?>


  <?php require("base/script.php"); ?>

  <script>
    $("#m-hrs").addClass("active");
    var idd = '';


    var table = $('.tbl_d').DataTable({
      "responsive": false,
      "ordering": false,
      "autoWidth": false,
      "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
      },
      "columnDefs": [{
        "width": "100px",
        "targets": 5
      }, ]
    });



    $(document).ready(function () {
      load_table();
    });


    function load_table() {
      $("#dtable").hide();
      table.clear().draw();

      $.ajax({
        url: 'modelo/consulta_g.php',
        type: "post",
        dataType: 'json',
        data: {
          "query": "CALL spq_estudios(null);"
        },
        error: function () {
          alert("Error de conexión")
        },
        success: function (res) {

          $("#dtable").fadeIn(2000);
          var str = '';
          for (var f = 0; f < res.length; f++) {
            let text = '';
            let ofe = '';
            if (res[f].activo == 1) {
              text = "Activo";
            } else {
              text = "Inactivo";
            }
            if (res[f].oferta == 1) {
              ofe = "SI";
            } else {
              ofe = "NO";
            }
            str += '<tr>';
            str += '<td>' + res[f].nombre + '</td>';
            str += '<td>' + res[f].tipo + '</td>';
            str += '<td>' + res[f].descripcion + '</td>';
            str += '<td>' + res[f].domicilio + '</td>';
            str += '<td>' + text + '</td>';
            str += '<td class="text-center"><button class="btn btn-primary btn-sm p-2" onClick="btnEditar(' + res[
                f].idestudio +
              ')" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-clock fa-1x" ></i></button></td>';
            str += '</tr>';
          }

          table.rows.add($(str)).draw();
        }
      });
    }




    function btnEditar(id) {

      $.ajax({
        url: 'modelo/consulta_g.php',
        type: "post",
        dataType: 'json',
        data: {
          "query": "CALL spq_detallehorarios(" + id + ")"
        },
        error: function () {
          msm_error();
        },
        success: function (res) {
          console.log(res);

          if(res.length>0){
          idd = id;
          $("#lini").val(res[0]['linicio']);
          $("#lfin").val(res[0]['lfin']);
          $("#mini").val(res[0]['minicio']);
          $("#mfin").val(res[0]['mfin']);
          $("#mmini").val(res[0]['mminicio']);
          $("#mmfin").val(res[0]['mmfin']);
          $("#jini").val(res[0]['jinicio']);
          $("#jfin").val(res[0]['jfin']);
          $("#vini").val(res[0]['vinicio']);
          $("#vfin").val(res[0]['vfin']);
          $("#sini").val(res[0]['sinicio']);
          $("#sfin").val(res[0]['sfin']);
          $("#dini").val(res[0]['dinicio']);
          $("#dfin").val(res[0]['sfin']);

          $("#horarios_gen .veri").each(function() {
            let veri = $(this).val();
            if (veri == "00:00:00") {
               $(this).val(null);
            }
          });
        }



        }
      });
    }


    $("#btn_save").click(() => {

      let evalua = false;
      let lunes = $("#lini").val();
      let lunes2 = $("#lfin").val();
      let martes = $("#mini").val();
      let martes2 = $("#mfin").val();
      let miercoles = $("#mmini").val();
      let miercoles2 = $("#mmfin").val();
      let jueves = $("#jini").val();
      let jueves2 = $("#jfin").val();
      let viernes = $("#vini").val();
      let viernes2 = $("#vfin").val();
      let sabado = $("#sini").val();
      let sabado2 = $("#sfin").val();
      let domingo = $("#dini").val();
      let domingo2 = $("#dfin").val();


      $("#horarios_gen .veri").each(function () {
        let valor = $(this).val();
        if (valor.length > 0) {
          evalua = true;
          
        } else {
          evalua = false;
        }
      });
 


     // if (evalua == true) {

        $.ajax({
          url: "modelo/m_horario.php",
          type: "post",
          data: {
            "id": idd,
            "op": "add",
            "lunes": lunes,
            "lunes2": lunes2,
            "martes": martes,
            "martes2": martes2,
            "miercoles": miercoles,
            "miercoles2": miercoles2,
            "jueves": jueves,
            "jueves2": jueves2,
            "viernes": viernes,
            "viernes2": viernes2,
            "sabado": sabado,
            "sabado2": sabado2,
            "domingo": domingo,
            "domingo2": domingo2
          },
          error: function () {
            msm_error();
          },
          success: function (res) {
            if (res > 0) {
              correcto_nupdate("Se guardo correctamente…");
              btnLimpiar();
              $("#basicExampleModal").modal("hide");
              load_table();
            } else {
              msm_seleccionar("Se generó un error intente nuevamente…");
            }
          }
        });


      //} else {
        //msm_vacios();
     // }

    });

    function btnLimpiar() {
       $(".veri").val(null);
    }
  </script>

</body>

</html>