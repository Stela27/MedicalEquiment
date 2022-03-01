const urll = "model/detalle-model.php";
// var id_estudio= 0;
// img_perfil="";
// let star_eva = 0;
class clsDetalle {
  constructor() {
    // this.btnUpdate = document.getElementById("btn-update");
    // this.addEventListener();
    $("#mapa_img").hide();
    $("#mapa").hide();
    this._read();
    this._read_img();
    this._read_comentarios();
  }
  // addEventListener() {
  //   this.btnUpdate.onclick = this._update;
  // }
  // _update() {
  //   var formData = new FormData(document.getElementById("frm_update"));
  //   formData.append("option", "update");
  //   formData.append("image", img_perfil);

  //   if (objPerfil._not_empty(formData)) {
  //     objGenerico._update(urll, formData, objPerfil, objGenerico);
  //     objPerfil._clear_form("#frm_update");
  //   } else {
  //     objGenerico._message_emply();
  //   }
  // }

  // _not_empty(formData) {
  //   if (
  //     formData.get("txt-nombre") == "" ||
  //     formData.get("txt-ap") == "" ||
  //     formData.get("txt-am") == "" ||
  //     formData.get("txt-tel") == "" ||
  //     formData.get("txt-usuario") == "" ||
  //     formData.get("txt-correo") == "" ||
  //     formData.get("txt-pass") == "" 
  //   ) {
  //     return false;
  //   } else {
  //     return true;
  //   }
  // }

  _read() {
    window.row = new Array();
    $.ajax({
      url: urll,
      type: "post",
      dataType: "json",
      data: { option: "read"},
      error: function (err) {
        console.log(err);
      },
      success: function (res) { 
        for (let f = 0; f < res.length; f++) {
          $("#nombre_d").html(res[0].estudio_nombre);
          $("#desc_d").html(res[0].estudio_des);
          $("#tipo_d").html(res[0].especialidad_nombre);
          $("#des_especialidad").html(res[0].especialidad_desc);
          $("#direc_e").html(res[0].direc_estado);
          $("#direc_m").html(res[0].direc_municipio);
          $("#direc_c").html(res[0].direc_localidad);
          $("#calle").html(res[0].direc_calle);
          $("#num").html(res[0].direc_numero);
          $("#cp").html(res[0].direc_cpostal);
          $("#tel_d1").html(res[0].direc_tel1);
          $("#tel_d2").html(res[0].direc_tel2);
          $("#whats").html(res[0].direc_whats);
          $("#nombre_c").html(res[0].direc_nombre);
          $("#coreeo").html(res[0].direc_correo);
          $("#precio").html(res[0].estudio_costo);
          $("#precio_antes").html(res[0].estudio_costo);
          $("#oferta").html(res[0].estudio_costoferta);
          $('#enlace_sitio').attr('href', res[0].direc_sitio);
          $('#enlace_facebook').attr('href', res[0].direc_facebook);
          $('#enlace_instagram').attr('href', res[0].direc_instagram);
          if(res[0].direc_geo==""){
            $("#mapa_img").show();
            $("#mapa_img").attr("src","view/img/map.jpg");
          }else{
            $("#mapa").show();
            $("#mapa").html(res[0].direc_geo);
          }

          // $("#u-pass").val(res[0].perfil_pass).focusin();
          // $("#img_perfil").attr("src","img/users/"+res[0].perfil_imagen);
          // $("#usuario").html(res[0].perfil_usuario);
          // $("#tipo").html(res[0].rol_nombre);
          // img_perfil = res[0].perfil_imagen;
        }
      }
    });
  }
  



  _read_img() {
    $.ajax({
      url: urll,
      type: "post",
      dataType: "json",
      data: { option: "read_img"},
      error: function (err) {
        console.log(err);
      },
      success: function (res) {
        let str = "";
        for (let f = 0; f < res.length; f++) {
            str += "<img src='../admin/view/img/estudio_img/"+res[f].imagen_img+"'>";
        }
        $("#galleria").html(str);
      }
    });
  }

  
  _read_comentarios() {
    $.ajax({
      url: urll,
      type: "post",
      dataType: "json",
      data: { option: "read_comentarios"},
      error: function (err) {
        console.log(err);
      },
      success: function (res) {
        let str ="";
        for (let f = 0; f < res.length; f++) {
          str +="<div class='media mb-2'>";
            str +="<img src='../admin/view/img/users/"+res[f].perfil_imagen+"'+ width='80' height='80'  class='rounded-circle mt-3'>"+"<br>";
            str +="<div class='media-body'>";
            str+="<p class='nombre'>"+res[f].perfil_usuario+"</p>";
            str+="<p class='fecha_c'>"+res[f].coemtario_fecha+"</p>";
            str+="<p class='comentario'>"+res[f].comentario_opinion+"</p>";
            str +="</div>";
            str +="</div>";
          
        }
        $("#foto").html(str);
      }
    });
  }
  
  // _star() {
  //   $("#estrellas").starrr({
  //     max: 5,
  //     change: function (e, valor) {
  //       star_eva = valor;
  //     }
  //   });
  // }
  
  

  // _clear_form(form) {
  //   $(form)[0].reset();
  // }
}
let objGenerico = new clsGenerico();
let objPerfil = new clsDetalle();
