const URL = "../model/estudios-model.php";
var id_registro = 0;
class clsEstudio {
  constructor() {
    this.btnInsert = document.getElementById("btn-insert");
    this.btnUpdate = document.getElementById("btn-update");
    this.addEventListener();
    this._read();
    this._select_especialidad("i-especialidad");
    this._select_especialidad("u-especialidad");
    this._select_clinica("i-clinica");
    this._select_clinica("u-clinica");
    objGenerico._translator("#dt_table");
    $("#m-estudios").addClass("active");
  }
  addEventListener() {
    this.btnInsert.onclick = this._insert;
    this.btnUpdate.onclick = this._update;
  }
  _insert() {
    var formData = new FormData(document.getElementById("frm_insert"));
    formData.append("option", "create");
    if (objEstudio._not_empty(formData)) {
      objGenerico._insert(URL, formData, objEstudio, objGenerico);
      objEstudio._clear_form("#frm_insert");
    } else {
      objGenerico._message_emply();
    }
  }
  _update() {
    var formData = new FormData(document.getElementById("frm_update"));
    formData.append("option", "update");
    formData.append("clave", id_registro);

    if (objEstudio._not_empty(formData)) {
      objGenerico._update(URL, formData, objEstudio, objGenerico);
      objEstudio._clear_form("#frm_update");
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
          let status =row[f].estudio_estatus == 0 ? "No disponible" : "Disponible";
          str += "<tr>";
          str += "<td>" + row[f].estudio_id + "</td>";
          str += "<td>" + row[f].estudio_fecha+ "</td>";
          str += "<td>" + row[f].direc_nombre+ "</td>";
          str += "<td>" + row[f].estudio_nombre+ "</td>";
          // str += "<td>" + row[f].estudio_des+ "</td>";
          str += "<td>" + row[f].especialidad_nombre+ "</td>";
          str += "<td>" + row[f].estudio_costo+ "</td>";
          str += "<td>" + row[f].estudio_costoferta+ "</td>";
          str += "<td>" + status + "</td>";
          str +=
            '<td class="text-center"><div class="btn-group" data-mdb-color="dark">' +
            '<button class="btn btn-danger btn-sm m-0 p-2" onclick="objEstudio._delete(row[' +
            f +
            '])"><li class="fa fa-trash"></li></button>' +
            '<button class="btn  btn-info btn-sm m-0 p-2" onclick="objEstudio._show_information(row[' +
            f +
            '])" data-toggle="modal" data-target="#modal-update"><li class="fa fa-edit"></li></button></div>' +
            "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  
  _select_especialidad(id_select) {
    objGenerico._list(URL,'select_especialidad',id_select);
  }
  _select_clinica(id_select) {
    objGenerico._list(URL,'select_clinica',id_select);
  }
  _not_empty(formData) {
    if (
      formData.get("cmb-clinica") == 0 ||
      formData.get("txt-estudio") == "" ||
      formData.get("txt-descripcion") == "" ||
      formData.get("cmb-especialidad") == 0 ||
      formData.get("txt-costo") == "" ||
      formData.get("txt-costoferta") == "" ||
      formData.get("cmb-status") == null
    ) {
      return false;
    } else {
      return true;
    }
  }
  _delete(row) {
    objGenerico._delete(URL, row.estudio_id, objEstudio, objGenerico);
  }
  _show_information(row) {
    id_registro = row.estudio_id;
    $("#u-estudio").val(row.estudio_nombre).focusin();
    $("#u-clinica").val(row.estudio_id_direc).focusin();
    $("#u-descripcion").val(row.estudio_des).focusin();
    $("#u-especialidad").val(row.estudio_idespe).focusin();
    $("#u-costo").val(row.estudio_costo).focusin();
    $("#u-costoferta").val(row.estudio_costoferta).focusin();
    $("#u-status").val(row.estudio_estatus).focusin();
  }

  _clear_form(form) {
    $(form)[0].reset();
  }
}
let objGenerico = new clsGenerico();
let objEstudio = new clsEstudio();
