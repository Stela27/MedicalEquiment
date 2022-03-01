const URL = "../model/horarios-model.php";
var id_registro = 0;
class clsHorario {
  constructor() {
    this.btnInsert = document.getElementById("btn-insert");
    this.btnUpdate = document.getElementById("btn-update");
    // insert
    this.select_=document.getElementById("i-especialidad");
    this._select_direccion("i-clinica");
    this._select_Especialidad("i-especialidad");
    // update
    this.select_=document.getElementById("u-especialidad");
    this._select_direccion_("u-clinica");
    this._select_Especialidad_("u-especialidad");
    this.addEventListener();
    this._read();
    objGenerico._translator("#dt_table");
    $("#m-horario").addClass("active");
  }
  addEventListener() {
    this.btnInsert.onclick = this._insert;
    this.btnUpdate.onclick = this._update;
    // insert
    this.select_.onchange=this._select_estudio;
    // update
    this.select_.onchange=this._select_estudio_;
  }
  _insert() {
    var formData = new FormData(document.getElementById("frm_insert"));
    formData.append("option", "create");
    if (objHorario._not_empty(formData)) {
      objGenerico._insert(URL, formData, objHorario, objGenerico);
      objHorario._clear_form("#frm_insert");
    } else {
      objGenerico._message_emply();
    }
  }
  _update() {
    var formData = new FormData(document.getElementById("frm_update"));
    formData.append("option", "update");
    formData.append("clave", id_registro);

    if (objHorario._not_empty(formData)) {
      objGenerico._update(URL, formData, objHorario, objGenerico);
      objHorario._clear_form("#frm_update");
    } else {
      objGenerico._message_emply();
    }
  }
  _read() {
    window.row = new Array();
    $.ajax({
      url: URL,
      type: "post",
      dataType: "json",
      data: { option: "read" },
      error: function (err) {
        console.log(err);
      },
      success: function (res) {
        var table = $("#dt_table").DataTable();
        table.clear().draw();
        let str = "";
        for (var f = 0; f < res.length; f++) {
          window.row[f] = res[f];
          let status =row[f].horario_estatus == 0 ? "No disponible" : "Disponible";
          str += "<tr>";
          str += "<td>" + row[f].horario_id + "</td>";
          str += "<td>" + row[f].direc_nombre + "</td>";
          str += "<td>" + row[f].estudio_nombre+ "</td>";
          str += "<td>" + row[f].especialidad_nombre + "</td>";
          str += "<td>" + row[f].horario_fechacita+ "</td>";
          str += "<td>" + row[f].horario_hentrada+ "</td>";
          str += "<td>" + row[f].horario_hsalida+ "</td>";
          str += "<td>" + status + "</td>";
          str +=
            '<td class="text-center"><div class="btn-group" data-mdb-color="dark">' +
            '<button class="btn btn-danger btn-sm m-0 p-2" onclick="objHorario._delete(row[' +
            f +
            '])"><li class="fa fa-trash"></li></button>' +
            '<button class="btn  btn-info btn-sm m-0 p-2" onclick="objHorario._show_information(row[' +
            f +
            '])" data-toggle="modal" data-target="#modal-update"><li class="fa fa-edit"></li></button></div>' +
            "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  // insert combos
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
  // update combos
  _select_direccion_(id_select) {
    objGenerico._list(URL,'select_direcc',id_select);
  }
  
  _select_Especialidad_(id_select) {
    objGenerico._list(URL,'select_especialidad',id_select);
  }
  _select_estudio_() {
    let id=$("#u-especialidad").val();
    objGenerico._list_especifico(URL,'select_estudio','u-estudio',id);
  }
  _not_empty(formData) {
    if (
      formData.get("cmb-clinica") == 0 ||
      formData.get("cmb-estudio") == 0 ||
      formData.get("cmb-especialidad") == 0 ||
      formData.get("txt-fechacita") == "" ||
      formData.get("txt-hinicio") == "" ||
      formData.get("txt-htermino") == "" ||
      formData.get("cmb-status") == null
    ) {
      return false;
    } else {
      return true;
    }
  }
  _delete(row) {
    objGenerico._delete(URL, row.horario_id, objHorario, objGenerico);
  }
  _show_information(row) {
    console.log(row.horario_idestudio);
    id_registro = row.horario_id;
    $("#u-clinica").val(row.horario_idclinica);
    $("#u-especialidad").val(row.horario_id_especi);
    $("#u-estudio").val(row.horario_idestudio);
    $("#u-fecha").val(row.horario_fechacita);
    $("#u-inicio").val(row.horario_hentrada);
    $("#u-htermino").val(row.horario_hsalida);
    $("#u-status").val(row.horario_estatus);
  }

  _clear_form(form) {
    $(form)[0].reset();
  }
}
let objGenerico = new clsGenerico();
let objHorario = new clsHorario();
