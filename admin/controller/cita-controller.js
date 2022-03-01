const URL = "../model/cita-model.php";
var calendar;
let fechaseleccionada;
let estudio;
let mes;
let especialidad;
let clinica;
class clsCitas {
  constructor() {
    // this._select_Calendario("i-estudio");
    this._cargar_calendario();
    this.btnllenar = document.getElementById("btn-llenar");
    this._select_Especialidad("i-especialidad");
    this.select=document.getElementById("i-especialidad");
    this._select_direccion("i-clinica");
    this.addEventListener();
    $("#m-cita").addClass("active");
    objGenerico._translator("#dt_table");
  }
  addEventListener() {
    this.select.onchange=this._select_estudio;
    this.btnllenar.onclick = this._llenar_calendario;
  }
  _cargar_calendario(){
    calendar = new CalendarYvv("#calendar", moment().format("Y-M-D"), "Lunes");
    calendar.funcPer = function(ev){
    fechaseleccionada=ev.currentSelected;
    objHorario._showCreate(fechaseleccionada);
    };
    calendar.createCalendar();
  }
  _select_direccion(id_select) {
    objGenerico._list(URL,'select_direcc',id_select);
  }
  _select_Especialidad(id_select) {
    objGenerico._list(URL,'select_especialidad',id_select);
  }
  _select_estudio() {
    let id=$("#i-especialidad").val();
    objGenerico._list_especifico(URL,'select_estudio','i-estudio',id);
  }
  _llenar_calendario(){
    estudio= $('#i-estudio').val();
    mes = $('#mes').val();
    especialidad=$('#i-especialidad').val();
    clinica=$('#i-clinica').val();
    if(estudio !=0 && mes !=0){
        $.ajax({
          url: URL,
          type: "post",
          dataType: "json",
          data: {"option":"calendar","estudio":estudio,"mes":mes,"especialidad":especialidad,"clinica":clinica},
          error: function(error) {
            alert("Error de conexión");
          },
          success: function(res) {
            var dias=[];
            for(let i=0; i < res.length;i++){
             if(res[i].horario_estatus==1){
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
       alert("Selecciona alguna opción");
      }
  }
 
  _read() {
    let estudio= $('#i-estudio').val();
    let especialidad=$('#i-especialidad').val();
    let clinica=$('#i-clinica').val();
    window.row = new Array();
    $.ajax({
      url: URL,
      type: "post",
      dataType: "json",
      data: {"option":"read","estudio":estudio,"fechaseleccionada":fechaseleccionada,"especialidad":especialidad,"clinica":clinica},
      error: function (err) {
        console.log(err);
      },
      success: function (res) {
        var table = $("#dt_table").DataTable();
        table.clear().draw();
        let str = "";
        for (var f = 0; f < res.length; f++) {
          window.row[f] = res[f];
          let status =row[f].agenda_estatus == 0 ? "Disponible" : "Agendado";
          str += "<tr>";
          str += "<td>" + row[f].agenda_id + "</td>";
          str += "<td>" + row[f].hora+ "</td>";
          str += "<td>" + row[f].especialidad_nombre+ "</td>";
          str += "<td>" + row[f].estudio_nombre+ "</td>";
          // str += "<td>" + row[f].horario_fechacita+ "</td>";
          str += "<td>" + row[f].horario_hentrada+ "</td>";
          str += "<td>" + row[f].horario_hsalida+ "</td>";
          str += "<td>" + status + "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  _showCreate(fecha_seleccionada) {
      $('#modal-view').modal('show');
      objHorario._read();
  }
}
let objGenerico = new clsGenerico();
let objHorario = new clsCitas();
