var contentLoad = document.querySelector(".load_icon");
class clsGenerico {
  _insert(URL, formData, objModulo, objGenerico) {
    contentLoad.style.visibility = "visible";
    $.ajax({
      url: URL,
      type: "post",
      contentType: false,
      processData: false,
      cache: false,
      data: formData,
      error: function (res) {
        console.log("Error: ", res);
      },
      success: function (val) {
        objGenerico._message_success(JSON.parse(val));
        objModulo._read();
        contentLoad.style.visibility = "hidden";
      },
    });
  }
  _update(URL, formData, objModulo, objGenerico) {
    contentLoad.style.visibility = "visible";
    $.ajax({
      url: URL,
      type: "post",
      contentType: false,
      processData: false,
      cache: false,
      data: formData,
      error: function (res) {
        console.log("Error: ", res);
      },
      success: function (val) {
        console.log(val);
        objGenerico._message_success(JSON.parse(val));
        objModulo._read();
        contentLoad.style.visibility = "hidden";
      },
    });
  }

  _delete(URL, id_registro, objModulo, objGenerico) {
    Swal.fire({
      title: "Eliminar registro",
      text: "¿Está seguro de borrar el registro: " + id_registro + " ?",
      type: "warning",
      cancelButtonColor: "#3085d6",
      confirmButtonColor: "#d33",
      confirmButtonText: "Aceptar",
      cancelButtonText: "Cancelar",
      showCancelButton: true,
      showDenyButton: true,
    }).then((result) => {
      if (result.value) {
        contentLoad.style.visibility = "visible";
        $.ajax({
          url: URL,
          type: "post",
          data: { option: "delete", clave: id_registro},
          error: function (res) {
            console.log("Error: ", res);
          },
          success: function (val) {
            objGenerico._message_success(JSON.parse(val));
            objModulo._read();
            contentLoad.style.visibility = "hidden";
          },
        });
      }
    });
  }
  _cancel(URL, id_registro, objModulo, objGenerico) {
    Swal.fire({
      title: "El paciente no se presento",
      text: "¿Está seguro de cambiar el estatus: " + id_registro + " ?",
      type: "warning",
      cancelButtonColor: "#3085d6",
      confirmButtonColor: "#d33",
      confirmButtonText: "Aceptar",
      cancelButtonText: "Cancelar",
      showCancelButton: true,
      showDenyButton: true,
    }).then((result) => {
      if (result.value) {
        contentLoad.style.visibility = "visible";
        $.ajax({
          url: URL,
          type: "post",
          data: { option: "cancelar", clave: id_registro},
          error: function (res) {
            console.log("Error: ", res);
          },
          success: function (val) {
            objGenerico._message_success(JSON.parse(val));
            objModulo._read();
            contentLoad.style.visibility = "hidden";
          },
        });
      }
    });
  }
  _cancelarp(URL, id_registro, objModulo, objGenerico) {
    Swal.fire({
      title: "Cancelar cita agendada",
      text: "¿Está seguro de cancelar la cita del  registro: " + id_registro + " ?",
      type: "warning",
      cancelButtonColor: "#3085d6",
      confirmButtonColor: "#d33",
      confirmButtonText: "Aceptar",
      cancelButtonText: "Cancelar",
      showCancelButton: true,
      showDenyButton: true,
    }).then((result) => {
      if (result.value) {
        contentLoad.style.visibility = "visible";
        $.ajax({
          url: URL,
          type: "post",
          data: { option: "cancelar", clave: id_registro},
          error: function (res) {
            console.log("Error: ", res);
          },
          success: function (val) {
            objGenerico._message_success(JSON.parse(val));
            objModulo._read();
            contentLoad.style.visibility = "hidden";
          },
        });
      }
    });
  }
  _desactivar(URL, id_registro, objModulo, objGenerico) {
    Swal.fire({
      title: "Desactivar cliente",
      text: "¿Está seguro de desactivar el  registro: " + id_registro + " ?",
      type: "warning",
      cancelButtonColor: "#3085d6",
      confirmButtonColor: "#d33",
      confirmButtonText: "Aceptar",
      cancelButtonText: "Cancelar",
      showCancelButton: true,
      showDenyButton: true,
    }).then((result) => {
      if (result.value) {
        contentLoad.style.visibility = "visible";
        $.ajax({
          url: URL,
          type: "post",
          data: { option: "_desactivar", clave: id_registro},
          error: function (res) {
            console.log("Error: ", res);
          },
          success: function (val) {
            objGenerico._message_success(JSON.parse(val));
            objModulo._read();
            contentLoad.style.visibility = "hidden";
          },
        });
      }
    });
  }
    _activar(URL, id_registro, objModulo, objGenerico) {
      Swal.fire({
        title: "Activar cliente",
        text: "¿Está seguro de activar  el  registro: " + id_registro + " ?",
        type: "warning",
        cancelButtonColor: "#3085d6",
        confirmButtonColor: "#d33",
        confirmButtonText: "Aceptar",
        cancelButtonText: "Cancelar",
        showCancelButton: true,
        showDenyButton: true,
      }).then((result) => {
        if (result.value) {
          contentLoad.style.visibility = "visible";
          $.ajax({
            url: URL,
            type: "post",
            data: { option: "_activar_", clave: id_registro},
            error: function (res) {
              console.log("Error: ", res);
            },
            success: function (val) {
              objGenerico._message_success(JSON.parse(val));
              objModulo._read();
              contentLoad.style.visibility = "hidden";
            },
          });
        }
      });
    }
  _list(URL,tipo,id_select){
    $.ajax({
      url: URL,
      type: "post",
      dataType: "json",
      data: { option: tipo},
      error: function (res) {
        console.log("Error: ", res);
      },
      success: function (res) {
        for (let i = 0; i < res.length; i++) {
          document.getElementById(id_select).innerHTML +=
            "<option value='" +
            res[i].code +
            "'>" +
            res[i].name +
            "</option>";
        }
      },
    });
  }
  _list_especifico(URL,tipo,id_select,id){
    $.ajax({
      url: URL,
      type: "post",
      async:false,
      dataType: "json",
      data: { option: tipo,clave:id},
      error: function (res) {
        console.log("Error: ", res);
      },
      success: function (res) {
        for (let i = 0; i < res.length; i++) {
          $("#" + id_select +" option").remove();
          $("#" + id_select +"").append('<option value="0" disabled selected >Seleccione</option>');
          document.getElementById(id_select).innerHTML +=
            "<option value='" +
            res[i].code +
            "'>" +
            res[i].name +
            "</option>";
        }
      },
    });
  }
  _translator(idTable) {
    $(idTable).DataTable({ language: { url: "js/Spanish.json" } });
  }
  _message_success(res) {
    Swal.fire({
      title: res.title,
      type: res.type,
      text: res.text,
      timer: 1400,
    });
  }
  _message_emply() {
    Swal.fire({
      type: "warning",
      title: "Advertencia",
      text: "¡No dejar datos incompletos!",
      timer: 1700,
    });
  }
}
