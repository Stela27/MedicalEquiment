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
  <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css"/>
  <!-- calendarrio -->
  <!-- <link rel="stylesheet" href="plugin_cita/css/bootstrap_calen.css"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"/> -->
  <link rel="stylesheet" href="plugin_cita/css/calendar.css"/>

  <style>
    /* calendario */
    .btn {
    margin: .375rem;
    color: inherit;
    text-transform: uppercase;
    word-wrap: break-word;
    white-space: normal;
    cursor: pointer;
    border: 0;
    border-radius: .125rem;
    box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    padding: .84rem 12px;
}
    .btn-azul {
      background-color: #2784ff !important;
      color: white;
    }
    .btn-azull {
      background-color: #2784ff !important;
      color: white;
    }
    .hover-azull:hover {
      background-color: #00C851 !important;
    }
    .hover-azul:hover{
      background-color: #2784ff !important;
      color: white;
    } */
    .tam {
      padding: 0.7rem 1.6rem;
      font-size: 0.8rem;
    }
    /* termina */
    #fechas_host,
    #fechas_domin,
    #datos_web,
    #p_medios {
      display: none;
    }
    .red {
      background-color: #ef5350;
    }

    #preview > img {
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
        <div class="row">
          <div class="col-md-7">
            <div class="row mb-3">
              <div class="col-md-6">
                <label for="" style="font-size: 16px;" class="m-0 text-center p-0">Seleccione el horario del Estudio</label>
                 <select class="custom-select custom-select-sm" id="estudio">
                   <option selected value="">-- Selecionar --</option>
                  <?php $datos=$query->consulta("SELECT * FROM `catestudio` WHERE `activo`=1");
                   while($fil=$datos->fetch_assoc()){?>
                   <option value="<?php echo $fil['idestudio'] ?>"><?php echo $fil['nombre'] ?></option>
                  <?php }?> 
                 </select>
                </div>
                <div class="col-md-6">
                  <label for="" class="m-0 p-0">Fecha</label>
                  <input type="date" id="dfecha" class="form-control">
                </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <!-- calendario -->
                <div id="calendar"></div>
                <!-- termina calendario -->
              </div>
            </div>
          </div>
          <div class="col-md-5">
          <div class="row">
          <div class="col-md-6">
          <!-- <label for="" style="font-size: 16px;" class="m-0 p-0 font-weight-bold">Realice nuevo registro</label> -->
                  <button
                    type="button" 
                    class="btn btn-dark  waves-light btn-md mt-4  text-white hover-azul" id="btn_add">
                    <i class="fas fa-user-edit p-1"></i>Nuevo registro
                  </button>
                </div>
          </div>
          <div class="card-body" id="formulario">
            <div class="card-header">
              <div class="row">
                <div class="col-md-12">
                  <p class="heading lead text-uppercase text-center font-weight-bold m-0 p-0" id="frm_titulo"></p>
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12">
                <label for="" style="font-size: 16px;" class="m-0 p-0 font-weight-bold">Fecha para citas: </label>
                  <label id="fecha" class="font-weight-bold"></label>
                </div>
              </div>
              <div class="row mb-2">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 col-6">
                      <label for="" style="font-size: 16px;" class="m-0 p-0">Hora de inicio</label>
                      <div class="md-form m-0">
                        <input type="time"
                          id="lini"
                          class="form-control p-0 veri"
                        />
                      </div>
                    </div>
                    <div class="col-md-6 col-6">
                    
                      <label for="" style="font-size: 16px;" class="m-0 p-0">Hora de termino</label>
                      <div class="md-form m-0">
                        <input
                          type="time"
                          id="lfin"
                          class="form-control p-0 veri" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                <div class="d-flex flex-wrap">
                <div class="select-outline position-relative w-100">
                <label style="font-size: 16px;" class="m-0 p-0">Estado de horario</label>
                    <select class="custom-select custom-select-sm" id="estado"  searchable="Search here..">
                    <option value="" disabled selected>Elija opcion</option>
                    <option value="1">Disponible</option>
                    <option value="0">No disponible</option>
                  </select>
                </div>
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
              </div>
              <div class="row">
                <div class="col-md-6">
                  <button
                    type="button" id="btn_save"
                    class="btn btn-azull text-white waves-light btn-md mt-4 hover-azull">
                    <i class="m-1 fas fa-save"></i>Guardar
                  </button>
                </div>
                <div class="col-md-6">
                  <button
                    type="button" id="btn_update"
                    class="btn btn-azull text-white waves-light btn-md mt-4 hover-azull">
                    <i class="m-1 fas fa-save"></i>Actualizar
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row wow fadeIn">
          <div class="col-md-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-sm table-striped tbl_d" id="dtable">
                    <thead class="table-dark">
                      <tr>
                        <th>Clave</th>
                        <th>Estudio</th>
                        <th>Fecha</th>
                        <th>Hora_Entrada</th>
                        <th>Hora_salida</th>
                        <th>Estatus</th>
                        <th>Acciones</th>
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
    </main>
    <!--Footer-->
    <?php // require("base/footer.php"); ?>
    <?php require("base/script.php"); ?>
    <!-- calendario -->
    <!-- <script type='text/javascript' src="plugin_cita/locale/es.js"></script>
    <script type='text/javascript' src="plugin_cita/moment.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script src="plugin_cita/js/calendar.js"></script>

    <script>
      var fechaseleccionada='';
      var idcita=0;
      $("#m-citas").addClass("active");
      var idd = "";

      var table = $(".tbl_d").DataTable({
        responsive: false,
        ordering: false,
        autoWidth: false,
        language: {
          url: "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
        },
        columnDefs: [
          {
            width: "100px",
            targets: 5,
          },
        ],
      });

      // inicializar el calendar
      $(document).ready(function (e) {
        // llenar_calendario();
        $('#formulario').hide();

        calendar = new CalendarYvv(
          "#calendar",
          moment().format("Y-M-D"),
          "Mon");
        calendar.funcPer = function (ev) {
          fechaseleccionada=ev.currentSelected;
          $("#fecha").text(fechaseleccionada);
        };
        console.log(calendar);
        calendar.colorResal="#87FAC1";
        calendar.diasResal = [4, 15, 26];
        calendar.createCalendar();
      });

      $(document).ready(function () {
        load_table();
      });



      function load_table() {
        window.row = new Array();
        $.ajax({
          url: "modelo/consulta_citas.php",
          type: "post",
          dataType: "json",
          data: {"op":'select'},
          error: function (error) {
            alert("Error de conexión");
          },
          success: function (res) {
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
                '<button class="btn red btn-sm p-2" onClick="eliminar('+ row[f].id_cita+')"><li class="fa fa-trash text-white"></li></button>' +
                '<button class="btn btn-primary btn-sm p-2" onClick="mostrar(row['+f+'])" ><li class="fa fa-edit"></li></button></div>' +
                "</td>";
              str += "</tr>";
            }
            table.rows.add($(str)).draw();
          },
        });
      }


      function llenar_calendario() {
        window.row = new Array();
        let estudio = $("#estudio").val();
        let fecha = $("#dfecha").val();
        $.ajax({
          url: "modelo/consulta_citas.php",
          type: "post",
          dataType: "json",
          data: {"op":'calendar'},
          
          error: function (error) {
            alert("Error de conexión");
          },
          success: function (res) {
            
          console.log(res);
          }
        });
      }


      function mostrar(fila){
        idcita=fila.id_cita;
        fechaseleccionada=fila.fecha_cita;
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
      function limpiar(){
        $("#nombre_estudio").val("");
        $("#fecha").text("");
        $("#lini").val("");
        $("#lfin").val("");
        $("#estado").val("");
      }

      function eliminar(clave){
      $.confirm({
        title: 'Eliminar',
        content: '¿ Desea eliminar el registro '+clave+'?',
        type: 'dark',
        typeAnimated: true,
        buttons: {
        confirm: {
        text: 'Ok',
        btnClass: 'btn-dark',
        action: function(){
          $.ajax({
                url: "modelo/consulta_citas.php",
                type: "post",
                data: {
                  "op": "delete",
                  "clave":clave
                },
                error: function () {
                  msm_error();
                },
                success: function (res) {
                  if (res > 0) {
                    correcto_nupdate("Se elimino correctamente…");
                    load_table();
                  } else {
                    msm_seleccionar("Se generó un error intente nuevamente…");
                  }
                }
          });
			 	
        	}
		}
		, 
	  cancel:{
      text:'Cancelar',
      btnClass:'btn-red'
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
              "fecha_seleccionada":fechaseleccionada,
              "estudio":nombre_estudio,
              "horainicio": horainicio,
              "horafin": horafin,
              "stado": stado
            },
            error: function () {
              msm_error();
            },
            success: function (res) {
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
              "clavecita":idcita,
              "fecha_seleccionada":fechaseleccionada,
              "estudio":nombre_estudio,
              "horainicio": horainicio,
              "horafin": horafin,
              "stado": stado
            },
            error: function () {
              msm_error();
            },
            success: function (res) {
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
