const URL = "../model/agendac-model.php";
var id_registro = 0;
class clsagendac {
  constructor() {
    this.btnUpdate = document.getElementById("btn-update");
    this.addEventListener();
    this._read();
    objGenerico._translator("#dt_table");
    $("#m-agendac").addClass("active");
  }
  addEventListener() {
    this.btnUpdate.onclick = this._update;
  }
  
  _update() {
    var formData = new FormData(document.getElementById("frm_update"));
    formData.append("option", "update");
    formData.append("clave", id_registro);

    if (objAgendac._not_empty(formData)) {
      objGenerico._update(URL, formData, objAgendac, objGenerico);
      objAgendac._clear_form("#frm_update");
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
          // let status =row[f].agenda_estatus ==0 ? "No se presento" : "Agendado";
          let status="";
          switch(row[f].agenda_estatus){
            case '0':
              status="Cancelad@";
              break;
              case '1':
                status="Agendad@";
                break;
                case '2':
                  status="No se presento";
                  break;
            }
          str += "<tr>";
          str += "<td>" + row[f].agenda_id+"</td>";
          str += "<td>" + row[f].agenda_fecha+ "</td>";
          str += "<td>" + row[f].nombre_completo+ "</td>";
          str += "<td>" + row[f].persona_telefono+ "</td>";
          str += "<td>" + row[f].persona_correo+ "</td>";
          str += "<td>" + row[f].horario_fechacita+ "</td>";
          str += "<td>" + row[f].hora+ "</td>";
          str += "<td>" + row[f].agenda_comentario+ "</td>";
          str += "<td>" + status + "</td>";
          str +=
            '<td class="text-center"><div class="btn-group" data-mdb-color="dark">' +
            '<button title="Cancelar" class="btn btn-danger btn-sm m-0 p-2" onclick="objAgendac._show_information(row[' +
            f +
            '])" data-toggle="modal" data-target="#modal-update"><i class="fas fa-ban"></i></button>' +
            '<button title="No se presento" class="btn btn-info btn-sm m-0 p-2" onclick="objAgendac._cancel(row[' +
            f +
            '])"><i class="fas fa-user-times"></i></button></div>' +
            "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  _show_information(row) {
    id_registro = row.agenda_id;
    $("#u-comentario").val(row.agenda_comentario).focusin();
  }
  _cancel(row) {
    objGenerico._cancel(URL, row.agenda_id, objAgendac,objGenerico);
  }
  _not_empty(formData) {
    if (
      formData.get("txt-comentario") == "") {
      return false;
    } else {
      return true;
    }
  }
  _clear_form(form) {
    $(form)[0].reset();
  }
}
let objGenerico = new clsGenerico();
let objAgendac = new clsagendac();
