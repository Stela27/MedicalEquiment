const URL = "../model/especialidad-model.php";
var id_registro = 0;
$("#m-especial").addClass("active");
class clsEspecialidad {
  constructor() {
    this.btnInsert = document.getElementById("btn-insert");
    this.btnUpdate = document.getElementById("btn-update");
    this.addEventListener();
    this._read();
    objGenerico._translator("#dt_table");
  }
  addEventListener() {
    this.btnInsert.onclick = this._insert;
    this.btnUpdate.onclick = this._update;
  }
  _insert() {
    var formData = new FormData(document.getElementById("frm_insert"));
    formData.append("option", "create");

    if (objEspecialidad._not_empty(formData)) {
      objGenerico._insert(URL, formData, objEspecialidad, objGenerico);
      objEspecialidad._clear_form("#frm_insert");
    } else {
      objGenerico._message_emply();
    }
  }
  _update() {
    var formData = new FormData(document.getElementById("frm_update"));
    formData.append("option", "update");
    formData.append("clave", id_registro);

    if (objEspecialidad._not_empty(formData)) {
      objGenerico._update(URL, formData, objEspecialidad, objGenerico);
      objEspecialidad._clear_form("#frm_update");
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
          let status =
            row[f].especialidad_estatus == 0 ? "No disponible" : "Disponible";
          str += "<tr>";
          str += "<td>" + row[f].especialidad_id + "</td>";
          str += "<td>" + row[f].especialidad_nombre + "</td>";
          str += "<td>" + row[f].especialidad_desc + "</td>";
          str += "<td>" + status + "</td>";
          str +=
            '<td class="text-center"><div class="btn-group" data-mdb-color="dark">' +
            '<button class="btn btn-danger btn-sm m-0 p-2" onclick="objEspecialidad._delete(row[' +
            f +
            '])"><li class="fa fa-trash"></li></button>' +
            '<button class="btn  btn-info btn-sm m-0 p-2" onclick="objEspecialidad._show_information(row[' +
            f +
            '])" data-toggle="modal" data-target="#modal-update"><li class="fa fa-edit"></li></button></div>' +
            "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  _not_empty(formData) {
    if (
      formData.get("txt-especialidad") == "" ||
      formData.get("txt-descripcion") == "" ||
      formData.get("cmb-status") == null
    ) {
      return false;
    } else {
      return true;
    }
  }
  _delete(row) {
    objGenerico._delete(URL, row.especialidad_id, objEspecialidad, objGenerico);
  }
  _show_information(row) {
    id_registro = row.especialidad_id;

    $("#u-especialidad").val(row.especialidad_nombre).focusin();
    $("#u-descripcion").val(row.especialidad_desc).focusin();
    $("#u-status").val(row.especialidad_estatus).focusin();
  }

  _clear_form(form) {
    $(form)[0].reset();
  }
}
let objGenerico = new clsGenerico();
let objEspecialidad = new clsEspecialidad();
