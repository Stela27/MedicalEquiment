<?php session_start();
if(!isset($_SESSION["datos"])){
 header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<?php require("base/head.php"); ?>

<style>
 #fechas_host,#fechas_domin,#datos_web,#p_medios{display: none;} 
</style>

<body class="grey lighten-3">

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <?php require("base/nav.php");?>
   
    <!-- Navbar -->

    <!-- Sidebar -->
    <?php require("base/menu.php"); ?>
    <!-- Sidebar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="pt-5 mx-lg-5">
    <div class="container-fluid mt-5">
     
     <a onClick="btnLimpiar()" class="btn-floating btn-lg btn-info" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-file-medical"></i></a>
     
     

      <div class="row wow fadeIn">


        <div class="col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
             <div class="table-responsive">
              <table class="table table-sm table-striped tbl_d" id="dtable">
                <thead class="table-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Estatus</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                                  
                </tbody>
              </table>
             </div>
            </div>
          </div>
        </div>
      </div>    
    </div>
  </main>
 
 
 <!-- Addd Clientes -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header blue-gradient-rgba">
        <h5 class="modal-title text-white" id="exampleModalLabel">Agregar Especialidad</h5>
        <button type="button" onClick="btnLimpiar()" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form class="text-left" style="color: #757575;" action="#!">
         
           <div class="row">
            <div class="col-md-7">
             <div class="md-form mt-2">
                <input type="text" id="nombre" class="form-control">
                <label for="nombre">Nombre Especialidad</label>
             </div>
            </div>
            
             <div class="col-md-5">
              <div class="custom-control custom-checkbox mt-3">
                <input type="checkbox" class="custom-control-input" id="_activo" checked>
                <label class="custom-control-label" for="_activo">Activo</label>
              </div>
             </div>
            
           </div>
              


        </form>   
       
      </div>
      <div class="modal-footer">
        <button type="button" id="btn_save" class="btn btn-elegant btn-sm">Guardar</button>
      </div>
    </div>
  </div>
</div>
 

  <!--Footer-->
 <?php // require("base/footer.php"); ?>


<?php require("base/script.php"); ?>
 
<script>
 $("#m-especial").addClass("active");
 var idd=0;
  var table = $('.tbl_d').DataTable({
    "responsive": false,
    "ordering":false,
    "autoWidth": false,
    "language": {
       "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"     
     }  ,
   "columnDefs": [           
       { "width": "150px", "targets": 2 },
    ]
  });
 
 $(document).ready(function(){
  load_table();
 });
 
 
 function load_table(){  
  $("#dtable").hide();
  table.clear().draw();
  
  $.ajax({
    url : 'modelo/consulta_g.php',
    type: "post",
    dataType:'json',
    data: {"query":"CALL spq_categorias(NULL);"},
    error: function (){alert("Error de conexión")},
    success: function(res){ 
     
     $("#dtable").fadeIn(2000);
     var str='';
     for(var f=0; f<res.length; f++){
      let text='';
      if(res[f].activo==1){text="Activo";}else{text="Inactivo";}
      str+='<tr>';
       str+='<td>'+res[f].tipo+'</td>';
       str+='<td>'+text+'</td>';
       str+='<td class="text-center"><div class=""><button class="btn btn-primary btn-sm p-2" onClick="btnEditar('+res[f].id_tipo+')" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-pencil-alt fa-1x" ></i></button></div></td>';
      str+='</tr>';
     }
     
      table.rows.add($(str)).draw();
    }
  });
 }
 
  

 
 
 function btnEditar(id){
    idd=id;
    $.ajax({
    url : 'modelo/consulta_g.php',
    type: "post",
    dataType:'json',
    data: {"query":"CALL spq_categorias('"+id+"')"},
    error: function (){msm_error();},
    success: function(res){ 
     //console.log(res);
     
     $("#nombre").val(res[0].tipo).focus();

     if(res[0]['activo']=="1"){
       $("#_activo").prop('checked',true);
     }else{
       $("#_activo").prop('checked',false);
     }
    
    }
  });
  
 }
 
 

 $("#btn_save").click(()=>{
  let nombre= $("#nombre").val();  
  let acti=$("#_activo").prop("checked") ? 1:0;
  
  if(nombre.length>0){
   
   $.ajax({
    url:"modelo/m_especalidad.php",
    type:"post",
    data:{"op":'add',"id":idd,"nombre":nombre,"activo":acti},
    error:function(){msm_error();},
    success: function(res){
     if (res>0){
      correcto_nupdate("Se guardo correctamente…");
      btnLimpiar();
      $("#basicExampleModal").modal("hide");
      load_table();    
     }else{
      msm_seleccionar("Se generó un error intente nuevamente…");
     }
    }
   });
   
   
  }else{
    msm_vacios();
  }
  
  
 });
 
 
 
 function btnLimpiar(){
   idd=0;
   $("#nombre").val("");
   $("#_activo").prop('checked',true);
 }
 

 
 
 
 
 
 
 
 
</script>
  
</body>

</html>
