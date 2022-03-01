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

<!-- css de calendario -->
<link rel="stylesheet" href="plugin_cita/css/bootstrap_calen.css">
<link rel="stylesheet" href="plugin_cita/css/calendar.css">

<style>

 #calendar{
  margin: 0;
    font-family: "Roboto", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    font-size: 12px;
    font-weight: 400;
    line-height: 0.5;
    padding: 0;
} 

#calendar .btn{
    margin: 1px;
}

.custom-select-sm {
    height: calc(1.5em + .5rem + 2px);
    padding-top: .25rem;
    padding-bottom: .25rem;
    padding-left: .5rem;
    font-size: .875rem;
}

#dtable_length>label>select{
  height: 35px;
  padding-right: 7px;
}
  #preview>img {
    width: 100%;
  }

  #load_img {
    display: none;
  }
  

  @media (min-width: 1200px){
      .navbar, .page-footer, main {
          padding-left: 270px;
      }
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

            <div class="row">
              <div class="col-md-6">

                <div class="row mb-3">
                  <div class="col-md-6">
                    <label for="" style="font-size: 16px;" class="m-0 text-center p-0">Estudio</label>
                    <select class="custom-select custom-select-sm" id="estudio">
                      <option selected value="0">-- Selecionar --</option>
                      <?php $datos = $query->consulta("SELECT * FROM `catestudio` WHERE `activo`=1");
                      while ($fil = $datos->fetch_assoc()) { ?>
                        <option value="<?php echo $fil['idestudio'] ?>"><?php echo $fil['nombre'] ?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label for="" class="m-0">Mes</label>
                    <select class="custom-select custom-select-sm" id="mes">
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
                  <div class="col-md-2">
                    <button class="btn green btn-sm p-2 mt-4" onClick="llenar_calendario()"><li class="fa fa-search text-white"></li></button>
                  </div>
                </div>
                

                <!-- se muestra calendario -->
                <div id="calendar"></div>

              </div>

              <div class="col-md-6">
              <!-- inicia formulario -->

              <button type="button" class="btn btn-dark  waves-light btn-md mt-4  text-white hover-azul" id="btn_add">
                    <i class="fas fa-user-edit p-1"></i>Nuevo registro
              </button>

              <div class="row" id="formulario">
                  <div class="col-md-12">
                  <label for="" style="font-size: 16px;" class="m-0 p-0 font-weight-bold">Fecha para citas: </label>
                    <label id="fecha" class="font-weight-bold"></label>
                  </div>
                <div class="col-md-6 col-6">
                  <label for="" style="font-size: 16px;" class="m-0 p-0">Hora de inicio</label>
                  <div class="md-form m-0">
                    <input type="time"  id="lini" class="form-control p-0 veri">
                  </div>
                </div>
                <div class="col-md-6 col-6">
                
                  <label for="" style="font-size: 16px;" class="m-0 p-0">Hora de termino</label>
                  <div class="md-form m-0">
                    <input type="time" id="lfin"  class="form-control p-0 veri" >
                  </div>
                </div>
                 
                <div class="col-md-6">
                  <div class="select-outline position-relative w-100">
                  <label style="font-size: 16px;" class="m-0 p-0">Estado de horario</label>
                      <select class="custom-select custom-select-sm" id="estado"  searchable="Search here..">
                      <option value="" disabled selected>Elija opcion</option>
                      <option value="1">Disponible</option>
                      <option value="0">No disponible</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-6">
                   <label for="" style="font-size: 16px;" class="m-0 p-0">Nombre de Estudio</label>
                   <select class="custom-select custom-select-sm" id="nombre_estudio">
                     <option selected value="">-- Selecionar --</option>
                    <?php $datos=$query->consulta("SELECT * FROM `catestudio` WHERE `activo`=1");
                     while($fil=$datos->fetch_assoc()){?>
                     <option value="<?php echo $fil['idestudio'] ?>"><?php echo $fil['nombre'] ?></option>
                    <?php }?> 
                   </select>
                </div>

                <div class="col-md-6">
                  <button type="button" id="btn_save" class="btn btn-primary text-white waves-light btn-md mt-4 hover-azull">
                    <i class="m-1 fas fa-save"></i>Guardar
                  </button>
                </div>

                <div class="col-md-6">
                  <button  type="button" id="btn_update"
                    class="btn btn-primary waves-light btn-md mt-4 hover-azull">
                    <i class="m-1 fas fa-save"></i>Actualizar
                  </button>
                </div>


              </div>


              <!-- termina -->
                    
              </div>
            </div>


          <div class="row mt-5">
            <div class="col-md-12">
              <div class="table-responsive">
                  <table class="table table-sm table-striped tbl_d" id="dtable">
                    <thead class="table-dark">
                      <tr>
                        <th>Clave</th>
                        <th>Estudio</th>
                        <th>Fecha</th>
                        <th>Hora de entrada</th>
                        <th>Hora de salida</th>
                        <th>Estado</th>
                        <th>Acción</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                  </table>
              </div>
            </div>
          </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>





  <!--Footer-->
  <?php // require("base/footer.php"); ?>


  <?php require("base/script.php"); ?>

  <script src="plugin_cita/js/moment-with-locales.min.js"></script>
	<script src="plugin_cita/js/calendar.js"></script>

  <script>
    $("#m-citas").addClass("active");
    var idd = '';
    var calendar; 

    var table = $("#dtable").DataTable({
      responsive: false,
      ordering: false,
      autoWidth: false,
      language: {
        url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
      },
      columnDefs: [{
        width: "100px",
        targets: 5,
      }, ],
    });

    $(document).ready(function(e){

      calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Lunes");
      calendar.funcPer = function(ev){
        fechaseleccionada=ev.currentSelected;
        $("#fecha").text(fechaseleccionada);
      };
      console.log(calendar);
      calendar.createCalendar();

      load_table();
      $('#formulario').hide();

	  });


    function load_table() {
      window.row = new Array();
      $.ajax({
        url: "modelo/consulta_citas.php",
        type: "post",
        dataType: "json",
        data: {
          "op": 'select'
        },
        error: function(error) {
          alert("Error de conexión");
        },
        success: function(res) {
          var table = $("#dtable").DataTable();
          table.clear().draw();

          let str = "";
          for (var f = 0; f < res.length; f++) {
            window.row[f] = res[f];
            str += "<tr>";
            str += "<td>" + row[f].id_cita + "</td>";
            str += "<td>" + row[f].nombre_estudio + "</td>";
            str += "<td>" + row[f].fecha_cita + "</td>";
            str += "<td>" + row[f].hora_entrada + "</td>";
            str += "<td>" + row[f].hora_salida + "</td>";
            str += "<td>" + row[f].status_m + "</td>";
            str +=
              '<td class="text-center"><div class="btn-group">' +
              '<button class="btn red btn-sm p-2" onClick="eliminar(' + row[f].id_cita + ')"><li class="fa fa-trash text-white"></li></button>' +
              '<button class="btn btn-primary btn-sm p-2" onClick="mostrar(row[' + f + '])" ><li class="fa fa-edit"></li></button></div>' +
              "</td>";
            str += "</tr>";
          }
          table.rows.add($(str)).draw();
        },
      });
    }

    function llenar_calendario() {
      var estudio= $('#estudio').val();
      var mes = $('#mes').val();
      if(estudio !=0 && mes !=0){
      $.ajax({
        url: "modelo/consulta_citas.php",
        type: "post",
        dataType: "json",
        data: {
          "op": 'calendar',
          "estudio":estudio,
          "mes":mes
        },
        error: function(error) {
          alert("Error de conexión");
        },
        success: function(res) {
          var dias=[];

          for(i=0; i<res.length;i++){
           if(res[i].status==1){
            dias.push(parseInt(res[i].dia));
           }
          }
          calendar.diasResal = dias;
          calendar.colorResal="#28a7454d";
          calendar.textResalt="#28a745";
          calendar.createCalendar();
        }
      });
    }else{
      msm_seleccionar("Selecciona alguna opción");
    }
    }

    function mostrar(fila) {
      idcita = fila.id_cita;
      fechaseleccionada = fila.fecha_cita;
      $("#nombre_estudio").val(fila.id_estudio);
      $("#fecha").text(fila.fecha_cita);
      $("#lini").val(fila.hora_entrada);
      $("#lfin").val(fila.hora_salida);
      $("#estado").val(fila.status_c);

      $('#frm_titulo').text('Editar la cita');
      $('#formulario').show();
      $('#btn_save').hide();
      $('#btn_update').show();
    }

    function limpiar() {
      $("#nombre_estudio").val("");
      $("#fecha").text("");
      $("#lini").val("");
      $("#lfin").val("");
      $("#estado").val("");
    }

    function eliminar(clave) {
      $.confirm({
        title: 'Eliminar',
        content: '¿ Desea eliminar el registro ' + clave + '?',
        type: 'dark',
        typeAnimated: true,
        buttons: {
          confirm: {
            text: 'Ok',
            btnClass: 'btn-dark',
            action: function() {
              $.ajax({
                url: "modelo/consulta_citas.php",
                type: "post",
                data: {
                  "op": "delete",
                  "clave": clave
                },
                error: function() {
                  msm_error();
                },
                success: function(res) {
                  if (res > 0) {
                    correcto_nupdate("Se elimino correctamente…");
                    load_table();
                  } else {
                    msm_seleccionar("Se generó un error intente nuevamente…");
                  }
                }
              });

            }
          },
          cancel: {
            text: 'Cancelar',
            btnClass: 'btn-red'
          }
        }
      });

    }

    $("#btn_save").click(() => {
      let horainicio = $("#lini").val();
      let horafin = $("#lfin").val();
      let stado = $("#estado").val();
      let nombre_estudio = $("#nombre_estudio").val();
      // agregar donde obtener el nombre de estudio
      $.ajax({
        url: "modelo/consulta_citas.php",
        type: "post",
        data: {
          "op": "insert",
          "fecha_seleccionada": fechaseleccionada,
          "estudio": nombre_estudio,
          "horainicio": horainicio,
          "horafin": horafin,
          "stado": stado
        },
        error: function() {
          msm_error();
        },
        success: function(res) {
          if (res > 0) {
            correcto_nupdate("Se guardo correctamente…");
            load_table();
            limpiar();
          } else {
            msm_seleccionar("Se generó un error intente nuevamente…");
          }
        }
      });

    });

    $("#btn_update").click(() => {
      let horainicio = $("#lini").val();
      let horafin = $("#lfin").val();
      let stado = $("#estado").val();
      let nombre_estudio = $("#nombre_estudio").val();
      // agregar donde obtener el nombre de estudio
      $.ajax({
        url: "modelo/consulta_citas.php",
        type: "post",
        data: {
          "op": "update",
          "clavecita": idcita,
          "fecha_seleccionada": fechaseleccionada,
          "estudio": nombre_estudio,
          "horainicio": horainicio,
          "horafin": horafin,
          "stado": stado
        },
        error: function() {
          msm_error();
        },
        success: function(res) {
          if (res > 0) {
            correcto_nupdate("Se guardo correctamente…");
            $('#formulario').hide();
            load_table();
            limpiar();
          } else {
            msm_seleccionar("Se generó un error intente nuevamente…");
          }
        }
      });

    });

    $("#btn_add").click(() => {
      $('#frm_titulo').text('Agregar Nueva Cita');
      $('#formulario').show();
      $('#btn_save').show();
      $('#btn_update').hide();
      limpiar();
    });

  </script>

</body>

</html>