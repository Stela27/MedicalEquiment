const URL = "model/cuentam-model.php";
var id_registro = 0;
class clsCuentam {
  constructor() {
    this.btnInsert = document.getElementById("btn-insert");
    this.addEventListener();
  }
  addEventListener() {
    this.btnInsert.onclick = this._insert;
  }
  _insert() {
    var formData = new FormData();
    formData.append("option", "create");
    formData.append("txt_nombre", $('#i_nombre').val());
    formData.append("txt_apellidop", $('#i_apellidop').val());
    formData.append("txt_apellidom", $('#i_apellidom').val());
    formData.append("txt_cedula", $('#i_cedula').val());
    formData.append("txt_rsocial", $('#i_rsocial').val());
    formData.append("txt_tel", $('#i_tel').val());
    formData.append("txt_rfc", $('#i_rfc').val());
    formData.append("txt_domicilio", $('#i_domicilio').val());
    formData.append("txt_user", $('#i_user').val());
    formData.append("txt_email", $('#i_email').val());
    formData.append("txt_pass", $('#i_pass').val());
    formData.append("txt_nclinica", $('#i_clinica').val());
    formData.append("txt_estado", $('#i_estado').val());
    formData.append("txt_municipio", $('#i_municipio').val());
    formData.append("txt_calle", $('#i_calle').val());
    formData.append("txt_numero", $('#i_numero').val());
    formData.append("txt_localidad", $('#i_localidad').val());
    formData.append("txt_cp", $('#i_cp').val());
    formData.append("txt_sitio", $('#i_sitio').val());
    formData.append("txt_facebook", $('#i_facebook').val());
    formData.append("txt_instagram", $('#i_instagram').val());
    formData.append("txt_geo", $('#i_geo').val());
    formData.append("txt_tel1", $('#i_tel1').val());
    formData.append("txt_tel2", $('#i_tel2').val());
    formData.append("txt_whats", $('#i_whats').val());
 
  
    // console.log(formData.get("txt_nombre"));
  // console.log(formData.get("txt_apellidop"));
  // console.log(formData.get("txt_apellidom"));
  // console.log(formData.get("txt_tel"));
  // console.log(formData.get("txt_user"));
  // console.log(formData.get("txt_email"));
  // console.log(formData.get("txt_pass"));
    if (objCuenta._not_empty(formData)) {
      objGenerico._insert(URL, formData, objGenerico);
    } else {
      objGenerico._message_emply();
    }
  }
  _not_empty(formData) {
    if (
      formData.get("txt_nombre") == "" ||
      formData.get("txt_apellidop") == "" ||
      formData.get("txt_apellidom") == "" ||
      formData.get("txt_cedula") == "" ||
      formData.get("txt_rsocial") == "" ||
      formData.get("txt_tel") == "" ||
      formData.get("txt_rfc") == "" ||
      formData.get("txt_domiciliol") == "" ||
      formData.get("txt_user") == "" ||
      formData.get("txt_email") == "" ||
      formData.get("txt_pass") == ""  ||
      formData.get("txt_nclinica") == "" ||
      formData.get("txt_estado") == "" ||
      formData.get("txt_municipio") == "" ||
      formData.get("txt_calle") == "" ||
      formData.get("txt_numero") == ""  ||
      formData.get("txt_localidad") == "" ||
      formData.get("txt_cp") == "" ||
      formData.get("txt_sitio") == "" ||
      formData.get("txt_facebook") == ""  ||
      formData.get("txt_instagram") == ""  ||
      formData.get("txt_geo") == "" ||
      formData.get("txt_tel1") == "" ||
      formData.get("txt_tel2") == "" ||
      formData.get("txt_whats") == "" 
    ) {
      return false;
    } else {
      return true;
    }
  }

  // _clear_form(form) {
  //   $(form)[0].reset();
  // }
}
let objGenerico = new clsGenerico();
let objCuenta = new clsCuentam();
