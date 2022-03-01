// new WOW().init();

// $(document).ready(function () {
//   // filtrar todos los estudios activos y las ofertas
//   let sql = "CALL spq_listarr();"
//   filtro(sql);

//   let analisis = text_comple("CALL  spq_autocomplete('ana');");
//   // let ubicacion =text_comple("CALL  spq_autocomplete('ubi');");

//   $("#nombre_").autocomplete({
//     source: analisis
//   });

//   // $("#ubicacion_").autocomplete({
//   //    source: ubicacion
//   // })


// });

// function text_comple(sql) {
//   var datos = [];
//   $.ajax({
//     url: 'admin/modelo/consulta_g.php',
//     type: 'post',
//     data: {  "query": sql },
//     dataType: 'json',
//     error: function () {  alert("Error de conexión"); },
//     success: function (res) {

//       for (let i = 0; i < res.length; i++) {
//         datos.push(res[i].nombre);
//       }

//     }
//   });
//   return datos;
// }

// function msm_vacios(){
// $.confirm({
//     title: 'Hay campos vacíos !',
//     content: 'Verifique por favor !',
//     type: 'dark',
//     typeAnimated: true,
//     buttons: {
//     tryAgain: {
//         text: 'Ok',
//         btnClass: 'btn-dark'
//       }
//     }
// });
// }


// $("#buscador").click(()=>{
//   let nombre=$("#nombre_").val();
//   let esta=$("#ubicacion_").val();

//   if(nombre.length>0 && esta !="0"){
//     filtro("CALL `spq_buscar`('"+nombre+"',"+esta+");");
//   }else{
//      msm_vacios();
//   }
// });

//filtrar todos los estudios disponibles 
// function filtro(sql) {
//   $.ajax({
//     url: 'admin/modelo/m_lista.php',
//     type: 'post',
//     data: {
//       "cod": sql
//     },
//     error: function () {
//       alert("Error de conexión")
//     },
//     success: function (res) {
//       $("#lista_datos").html(res);
//       $("#nombre_").val(null);
//       $("#ubicacion_").val(0);
//     }
//   });
// }

// abrir modal login
function abrirlogin(){
  $('#modalLoginForm').modal('show');
}