const URL = "../model/agendap-model.php";
var id_registro = 0;
class clsagendap {
  constructor() {
    this._read();
    objGenerico._translator("#dt_table");
    $("#m-agendap").addClass("active");
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
            '<button title="Cancelar" class="btn btn-danger btn-sm m-0 p-2" onclick="objAgendap._cancelarp(row[' +
            f +
            '])"><i class="fas fa-ban"></i></button>'
            "</td>";
          str += "</tr>";
        }
        table.rows.add($(str)).draw();
      },
    });
  }
  _cancelarp(row) {
    objGenerico._cancelarp(URL, row.agenda_id, objAgendap,objGenerico);
  }
}
let objGenerico = new clsGenerico();
let objAgendap = new clsagendap();
