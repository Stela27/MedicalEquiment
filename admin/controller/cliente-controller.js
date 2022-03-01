const URL = "../model/cliente-model.php";
var id_registro = 0;
class clsCliente {
  constructor() {
    this._read();
    objGenerico._translator("#dt_table");
    $("#m-cliente").addClass("active");
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
          let status =row[f].medico_estatus== 0 ? "Desactivo" : "Activo";
          str += "<tr>";
          str += "<td>" + row[f].medico_id + "</td>";
          str += "<td>" + row[f].medico_fechac+ "</td>";
          str += "<td>" + row[f].nombre_completo+ "</td>";
          str += "<td>" + row[f].medico_rfc+ "</td>";
          str += "<td>" + row[f].medico_nocedula+ "</td>";
          str += "<td>" + row[f].medico_domicilio+ "</td>";
          str += "<td>" + row[f].medico_razon_social+ "</td>";
          str += "<td>" + row[f].persona_correo+ "</td>";
          str += "<td>" + row[f].persona_telefono+ "</td>";
          str += "<td>" + status + "</td>";
          str +=
            '<td class="text-center"><div class="btn-group" data-mdb-color="dark">' +
            '<button title="Desactivar" class="btn btn-danger btn-sm m-0 p-2" onclick="objCliente._update_status(row[' +
            f +
            '])"><i class="fas fa-ban"></i></button>'+
            '<button title="Activar" class="btn btn-blue btn-sm m-0 p-2" onclick="objCliente._activar_status(row[' +
            f +
            '])"><i class="fas fa-check"></i></button>'+
           '</div>'+
            "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  _update_status(row) {
    objGenerico._desactivar(URL, row.medico_id, objCliente,objGenerico);
  }
  _activar_status(row) {
    objGenerico._activar(URL, row.medico_id, objCliente,objGenerico);
  }
}
let objGenerico = new clsGenerico();
let objCliente = new clsCliente();
