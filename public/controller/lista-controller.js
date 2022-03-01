const urll = "model/lista-model.php";
class clsFiltro {
  constructor() {
    // this.btnUpdate = document.getElementById("btn-update");
    // this.addEventListener();
    this.buscando = document.getElementById("buscador");
    this.addEventListener();
  }
  addEventListener() {
    this.buscando.onclick = this._read_filtro;
  }
  _read_filtro() {
    var formData = new FormData();
    formData.append("option", "read_filtro");
    formData.append("txt_estudio", $('#estudio_').val());
    formData.append("txt_search", $('#search').val());

    if (objLista._not_empty(formData)) {
      objLista._read(formData);
    } else {
      objGenerico._message_emply();
    }
  }
  _not_empty(formData) {
    if (
      formData.get("txt_estudio") == "" ||
      formData.get("txt_search") == "" 
    ) {
      return false;
    } else {
      return true;
    }
  }

  _read(formulario) {
    $.ajax({
      url: urll,
      type: "post",
      contentType: false,
      processData: false,
      cache: false,
      dataType: "json",
      data: formulario,
      error: function (err) {
        console.log(err);
      },
      success: function (res) {
        let str ="";
        for (let f = 0; f < res.length; f++) {
          str +="<div class='card-body'>";
          str +="<div class='row'>";
          str += "<div class='col-md-3 text-center p-2 btn-info'>";
          str += "<img src='../admin/view/img/estudio_img/"+res[f].img+"'>";
          str +="</div>";
          str += "<div class='col-md-6 rounded-left pt-4 pb-3'>";
          str += "<h5 class='font-weight-bold'>"+res[f].estudio_nombre+"</h5>"
          str += "<p class='m-0 mb-2 text-muted'>"+res[f].especialidad_nombre+"</p>";      
          str += "<div style='height:100px;'>";
          str += "<p class='mb-3m-0 mb-2 text-muted' style='line-height: 1'>"+"<strong>"+res[f].estudio_des+ "</strong>"+"</p>";
          str += "</div>";
          str += "</div>";
          // espacio precio
          str +="<div class='col-md-3 text-center pt-4'  style='background-color:#f8f8f8;'>";
            if(res[0].estudio_oferta==1){
              str += "<span class='fas fa-tags orange-ic fa-2x' style='position: absolute; right: 12px; top: 10px;'></span>";
              str +="<p class='font-weight-normal costo mb-3'>"+"$"+res[f].estudio_costo+"</p>";
            }
            else{
              str +="<p class='font-weight-normal costo mb-3'>"+"$"+res[f].estudio_costo+"</p>";
            }
          str +="<a href='detalle.php' style='background-color:#11D2CB;color:white;' class='btn btn-md font-weight-bold'><i class='fas fa-info-circle m-1'></i>Más Detalle</a>"
          str +="</div>";
          // termina espacio precio
          // cierre row
          str +="</div>";
           // cierre card body
          str +="</div>";
        }
        $("#filtro").html(str);
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
let objLista = new clsFiltro();
