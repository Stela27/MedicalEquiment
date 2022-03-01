<?php
session_start();

if(!isset($_SESSION["datos"])){
 header('Location: index.php');
}

$id=$_GET['id'];
$nom=$_GET['nom'];
 
require("modelo/ac_bd.php");
$queryy= new s_acciones;

?>
<!DOCTYPE html>
<html lang="es">

<?php require("base/head.php"); ?>
 <style>
  #text-m{display: none;}
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
    
     
     <a onClick="btnLimpiar()" style="position: fixed; bottom: 20px; right: 15px; z-index: 999;" class="btn-floating btn-lg btn-info" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-comment"></i></a>

      <div class="row wow fadeIn">


        <div class="col-md-12 mb-4">
          <div class="card">
            <div class="card-body" id="text-m">
              <h4 class="blue-text m-0"><strong>Cliente: </strong><?php echo $nom; ?></h4>
               <hr>
             
             <?php $resula=$queryy->consulta("SELECT * FROM `catcomenterios` WHERE `idCliente`=".$id." ORDER BY  `idComentarios` ASC");
             while($fila=$resula->fetch_assoc()){
              $date = new DateTime($fila['fecha']); 
             ?>
             
              <div class="media d-block d-sm-flex mt-4">
               <img class="card-img-64 rounded z-depth-1 d-flex mx-auto mb-3 "
                 src="img/pefil.png" alt="Generic placeholder image">
               <div class="media-body text-center text-md-left ml-md-3 ml-0">
                 <p class="font-weight-bold my-0">
                   Admin
                 </p>
                <p class="mb-0"><small><em><?php echo $date->format('g:ia \o\n l jS F Y'); ?></em></small></p>
                <p class="m-0"><?php echo $fila['comentario']; ?></p>        
               </div>             
              <button title="Editar Comentario" class="btn btn-elegant btn-sm p-2" data-toggle="modal" data-target="#basicExampleModal" onClick="btnEditar('<?php echo $fila['idComentarios']?>')"><i style="font-size: 15px;" class="fas fa-comment-dots"></i></button>
             </div>
             
             <?php }?>

          
              
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
      <div class="modal-header info-color-dark">
        <h5 class="modal-title text-white" id="exampleModalLabel">Agregar Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form class="text-center" style="color: #757575;" action="#!">
         <div class="md-form mt-1">
          <textarea id="comen" class="md-textarea form-control" rows="2"></textarea>
           <label for="comen">Agregra Comentarios</label>
         </div>         
        </form>   
       
       
      </div>
      <div class="modal-footer">
       
        <button type="button" id="btnSave" class="btn btn-elegant btn-sm">Guardar</button>
      </div>
    </div>
  </div>
</div>


  <!--Footer-->
 <?php //require("base/footer.php"); ?>


<?php require("base/script.php"); ?>
 
<script>
 var idd=0;
 $("#m-detalle").addClass("active");
 $("#m-detalle").show();
 
 $(document).ready(function(){
  $("#text-m").fadeIn(2000);
 });
 
 $("#btnSave").click(()=>{
   let coment=$("#comen").val();
   let id_clien='<?php echo $id; ?>';

  
  if(coment.length>0){
   
   $.ajax({
    url:"modelo/m_datos.php",
    type:"post",
    data:{"op":"add_coment","id":idd,"coment":coment,"idclie":id_clien,"estatus":'1'},
    error:function(){msm_error();},
    success: function(res) {
     if (res>0){
      msm_final("Se guardo correctamente…");
     }else{
      msm_seleccionar("Se generó un error intente nuevamente…");
     }
    }
   });
   
   
  }else{
    msm_vacios();
  }
  
  
 });
 
 
 function btnEditar(id){
      
      $.ajax({
        url : 'modelo/consulta_g.php',
        type: "post",
        dataType:'json',
        data: {"query":"SELECT * FROM `catcomenterios` WHERE `idComentarios`="+id},
        error: function (){alert("Error de conexión")},
        success: function(res){ 
          idd=res[0].idComentarios;
          $("#comen").val(res[0].comentario).focusin();     
        }
      });
  
 }
 
 function btnLimpiar(){
   $("#comen").val("").focus();
   idd=0;
 }
</script>
  
</body>

</html>
