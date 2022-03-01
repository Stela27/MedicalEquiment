const URL = "../model/direcciones-model.php";
var id_registro = 0;
class clsDirecc {
  constructor() {
    this.btnInsert = document.getElementById("btn-insert");
    this.btnUpdate = document.getElementById("btn-update");
    this.addEventListener();
    this._read();
    objGenerico._translator("#dt_table");
    $("#m-direccion").addClass("active");
  }
  addEventListener() {
    this.btnInsert.onclick = this._insert;
    this.btnUpdate.onclick = this._update;
  }
  _insert() {
    var formData = new FormData(document.getElementById("frm_insert"));
    formData.append("option", "create");
    if (objDirecc._not_empty(formData)) {
      objGenerico._insert(URL, formData, objDirecc, objGenerico);
      objDirecc._clear_form("#frm_insert");
    } else {
      objGenerico._message_emply();
    }
  }
  _update() {
    var formData = new FormData(document.getElementById("frm_update"));
    formData.append("option", "update");
    formData.append("clave", id_registro);

    if (objDirecc._not_empty(formData)) {
      objGenerico._update(URL, formData, objDirecc, objGenerico);
      objDirecc._clear_form("#frm_update");
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
          let status =row[f].direc_estatus == 0 ? "No disponible" : "Disponible";
          str += "<tr>";
          str += "<td>" + row[f].direc_id + "</td>";
          str += "<td>" + row[f].direc_fecha+ "</td>";
          str += "<td>" + row[f].direc_nombre+ "</td>";
          str += "<td>" + row[f].direc_estado+ "</td>";
          str += "<td>" + row[f].direc_municipio+ "</td>";
          str += "<td>" + row[f].direc_cpostal+ "</td>";
          str += "<td>" + status + "</td>";
          str +=
            '<td class="text-center"><div class="btn-group" data-mdb-color="dark">' +
            '<button class="btn btn-danger btn-sm m-0 p-2" onclick="objDirecc._delete(row[' +
            f +
            '])"><li class="fa fa-trash"></li></button>' +
            '<button class="btn  btn-info btn-sm m-0 p-2" onclick="objDirecc._show_information(row[' +
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
      formData.get("txt-lugar") == "" ||
      formData.get("txt-sitio") == "" ||
      formData.get("txt-facebook") == "" ||
      formData.get("txt-instagram") == "" ||
      formData.get("txt-geo") == "" ||
      formData.get("txt-telefono1") == "" ||
      formData.get("txt-telefono2") == "" ||
      formData.get("txt-whats") == "" ||
      formData.get("txt-estado") == "" ||
      formData.get("txt-municipio") == "" ||
      formData.get("txt-localidad") == "" ||
      formData.get("txt-calle") == "" ||
      formData.get("txt-numero") == "" ||
      formData.get("txt-cp") == "" ||
      formData.get("cmb-status") == null
    ) {
      return false;
    } else {
      return true;
    }
  }
  _delete(row) {
    objGenerico._delete(URL, row.direc_id, objDirecc, objGenerico);
  }
  _show_information(row) {
    id_registro = row.direc_id;
    $("#u-lugar").val(row.direc_nombre).focusin();
    $("#u-sitio").val(row.direc_sitio).focusin();
    $("#u-facebook").val(row.direc_facebook).focusin();
    $("#u-instagram").val(row.direc_instagram).focusin();
    $("#u-geolocalizacion").val(row.direc_geo).focusin();
    $("#u-tel1").val(row.direc_tel1).focusin();
    $("#u-tel2").val(row.direc_tel2).focusin();
    $("#u-whats").val(row.direc_whats).focusin();
    $("#u-estado").val(row.direc_estado).focusin();
    $("#u-municipio").val(row.direc_municipio).focusin();
    $("#u-localidad").val(row.direc_localidad).focusin();
    $("#u-calle").val(row.direc_calle).focusin();
    $("#u-numero").val(row.direc_numero).focusin();
    $("#u-cp").val(row.direc_cpostal).focusin();
    $("#u-status").val(row.direc_estatus);
  }

  _clear_form(form) {
    $(form)[0].reset();
  }
}
let objGenerico = new clsGenerico();
let objDirecc = new clsDirecc();
