const URL = "model/cuenta-model.php";
var id_registro = 0;
class clsCuenta {
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
    formData.append("txt_tel", $('#i_tel').val());
    formData.append("txt_user", $('#i_user').val());
    formData.append("txt_email", $('#i_email').val());
    formData.append("txt_pass", $('#i_pass').val());

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
      formData.get("txt_tel") == "" ||
      formData.get("txt_user") == "" ||
      formData.get("txt_email") == "" ||
      formData.get("txt_pass") == ""
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
let objCuenta = new clsCuenta();
