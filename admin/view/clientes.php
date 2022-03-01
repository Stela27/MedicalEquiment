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
     
     <a onClick="btnLimpiar()" class="btn-floating btn-lg btn-info" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-user-plus"></i></a>
     
     

      <div class="row wow fadeIn">


        <div class="col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
             <div class="table-responsive">
              <table class="table table-sm table-striped tbl_d" id="dtable">
                <thead class="table-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Tipo</th>
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
        <h5 class="modal-title text-white" id="exampleModalLabel">Agregar Usuarios</h5>
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
                <label for="nombre">Nombre Completo</label>
             </div>
            </div>
            
             <div class="col-md-5">
              <div class="md-form mt-1">
                <input type="tel" id="tel" class="form-control">
                <label for="tel">Teléfono</label>
              </div>
             </div>
            
             <div class="col-md-6">
              <div class="md-form mt-1">
                <input type="email" id="correo" class="form-control">
                <label for="correo">Correo</label>
              </div>
             </div>
             
             <div class="col-md-6">
               <div class="md-form mt-1 mb-0">
                 <input type="password" id="pass" class="form-control">
                 <label for="contraseña">Contraseña</label>
               </div>              
             </div>
            
             <div class="col-md-6">
              <label for="" style="font-size: 14px;" class="m-0 p-0">Tipo de usuario</label>
               <select class="custom-select custom-select-sm" id="tipo">
                 <option selected value="">-- Selecionar --</option>
                  <option  value="1">Administrador</option>
                  <option  value="2">Cliente</option>                
               </select>             
             </div>
            
             <div class="col-md-6">
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
 $("#m-cliente").addClass("active");
 var idd=0;
  var table = $('.tbl_d').DataTable({
    "responsive": false,
    "ordering":false,
    "autoWidth": false,
    "language": {
       "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"     
     }  ,
   "columnDefs": [           
       { "width": "150px", "targets": 5 },
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
    data: {"query":"CALL spq_admin_client(NULL)"},
    error: function (){alert("Error de conexión")},
    success: function(res){ 
     
     $("#dtable").fadeIn(2000);
     var str='';
     for(var f=0; f<res.length; f++){
      let text='';
      let tipo='';
      if(res[f].activo==1){text="Activo";}else{text="Inactivo";}
      if(res[f].idtipo_user==1){tipo="Admin";}else{tipo="Cliente";}
      str+='<tr>';
       str+='<td>'+res[f].nombre+'</td>';
       str+='<td>'+res[f].correo+'</td>';
       str+='<td>'+res[f].tel+'</td>';      
       str+='<td>'+tipo+'</td>';
       str+='<td>'+text+'</td>';
       str+='<td class="text-center"><div class=""><button class="btn btn-primary btn-sm p-2" onClick="btnEditar('+res[f].id_admin+')" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-pencil-alt fa-1x" ></i></button></div></td>';
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
    data: {"query":"CALL spq_admin_client('"+id+"')"},
    error: function (){msm_error();},
    success: function(res){ 
     console.log(res);
     
     $("#nombre").val(res[0].nombre).focus();
     $("#tel").val(res[0].tel).focus();
     $("#correo").val(res[0].correo).focus();
     $("#pass").val(res[0].pass).focus();
     $("#tipo").val(res[0].idtipo_user);
     
     if(res[0].activo=="1"){
       $("#_activo").prop("checked",true);
     }else{
       $("#_activo").prop("checked",false);
     }
    
    }
  });
  
 }
 
 

 $("#btn_save").click(()=>{

  
  let nombre= $("#nombre").val();
  let tel= $("#tel").val();
  let correo= $("#correo").val();
  let pass= $("#pass").val();
  let tipo= $("#tipo").val();
  let acti= $("#_activo").prop("checked") ? 1:0;
  
  if(nombre.length>0){
   
   $.ajax({
    url:"modelo/m_clientes.php",
    type:"post",
    data:{"op":'add',"id":idd,"nombre":nombre,"tipo":tipo,"tel":tel,"correo":correo,"pass":pass,"activo":acti},
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
 }
 

 
 
 
 
 
 
 
 
</script>
  
</body>

</html>
