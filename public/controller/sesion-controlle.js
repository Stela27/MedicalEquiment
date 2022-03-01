const urll = "model/sesion-model.php";
class clsSesion {
  constructor() {
    // this._select_tipo("i-rol");
    this.btnSesion = document.getElementById("btn-iniciar");
    this.addEventListener();
  }
  addEventListener() {
    this.btnSesion.onclick = this._sesion;
  }

  // _select_tipo(id_select) {
  //   objGenerico._list(urll ,'select_tipo',id_select);
  // }

  _sesion() {
    var formData = new FormData();
    formData.append("option", "read");
    // formData.append("txt_rol", $('#i-rol').val());
    formData.append("txt_user", $('#user').val());
    formData.append("txt_pass", $('#pass').val());

    console.log(formData.get("txt_user"));
    console.log(formData.get("txt_pass"));
    if (objSesion._not_empty(formData)) {
      objGenerico._login(urll, formData, objGenerico);
    } else {
      objGenerico._message_emply();
    }
  }
  _not_empty(formData) {
    if (
      // formData.get("txt_rol") == "" ||
      formData.get("txt_user") == "" ||
      formData.get("txt_pass") == "" 
    ) {
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
let objSesion = new clsSesion();
