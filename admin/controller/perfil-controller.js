const URL = "../model/perfil-model.php";
var id_user= 0;
var img_perfil ="";
class clsPerfil {
  constructor() {
    this.btnUpdate = document.getElementById("btn-update");
    this.addEventListener();
    this._read();
    $("#m-perfil").addClass("active");

  }
  addEventListener() {
    this.btnUpdate.onclick = this._update;
  }
  _update() {
    var formData = new FormData(document.getElementById("frm_update"));
    formData.append("option", "update");
    formData.append("image", img_perfil);

    if (objPerfil._not_empty(formData)) {
      objGenerico._update(URL, formData, objPerfil, objGenerico);
      objPerfil._clear_form("#frm_update");
    } else {
      objGenerico._message_emply();
    }
  }

  _not_empty(formData) {
    if (
      formData.get("txt-nombre") == "" ||
      formData.get("txt-ap") == "" ||
      formData.get("txt-am") == "" ||
      formData.get("txt-tel") == "" ||
      formData.get("txt-usuario") == "" ||
      formData.get("txt-correo") == "" ||
      formData.get("txt-pass") == "" 
    ) {
      return false;
    } else {
      return true;
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
        for (var f = 0; f < res.length; f++) {
          $("#u-nombre").val(res[0].persona_nombre).focusin();
          $("#u-ap").val(res[0].persona_apaterno).focusin();
          $("#u-am").val(res[0].persona_amaterno).focusin();
          $("#u-tel").val(res[0].persona_telefono).focusin();
          $("#u-usuario").val(res[0].perfil_usuario).focusin();
          $("#u-correo").val(res[0].persona_correo).focusin();
          $("#u-pass").val(res[0].perfil_pass).focusin();
          $("#img_perfil").attr("src","img/users/"+res[0].perfil_imagen);
          $("#usuario").html(res[0].perfil_usuario);
          $("#tipo").html(res[0].rol_nombre);
          img_perfil = res[0].perfil_imagen;
          
        }
      }
    });
  }
  
  // _show_information(row) {
  //   id_user= row.persona_id;
  //   $("#u-nombre").val(row.persona_nombre).focusin();
  //   $("#u-ap").val(row.persona_apaterno).focusin();
  //   $("#u-am").val(row.persona_amaterno).focusin();
  //   $("#u-tel").val(row.persona_telefono).focusin();
  //   $("#u-usuario").val(row.perfil_usuario).focusin();
  //   $("#u-correo").val(row.persona_correo).focusin();
  //   $("#u-pass").val(row.perfil_pass).focusin();
  // }

  _clear_form(form) {
    $(form)[0].reset();
  }
}
let objGenerico = new clsGenerico();
let objPerfil = new clsPerfil();
