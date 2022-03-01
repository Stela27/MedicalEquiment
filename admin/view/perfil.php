<?php session_start();
if(!isset($_SESSION["datos"])){
header('Location: index.php');
}

$acti=$_SESSION["datos"]["activo"];
$tip=$_SESSION["datos"]["tipo"];

?>

<!DOCTYPE html>
<html lang="es">

<?php require("base/head.php"); ?>
<style>



 
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
     
     <a  onClick="btnEditar()" class="btn-floating btn-lg btn-info" data-toggle="modal" data-target="#basicExampleModal"><i class="fas fa-user-edit"></i></a>

      <div class="row wow fadeIn justify-content-center">


        <div class="col-md-5 mb-4">
          <!-- Card -->
        <div class="card testimonial-card">

            <!-- Background color -->
            <div class="card-up card-image" style="background-image: url(https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20%286%29.jpg); position: absolute;  width: 100%;     height: 110px;">
              <div class="rgba-black-strong h-100 p-3 white-text">
                <p class="font-weight-normal mb-0"><?php echo $_SESSION["datos"]["nombre"] ?></p>
                <p class="small mb-0">Administrador</p>
              </div>
            </div>

            <!-- Avatar -->
            <div class="avatar mx-auto white">
              <img src="img/pefil.png" class="rounded-circle" style="width: 172px; position: relative; z-index: 99; margin-top: 21px;    border: 5px solid #fff;" alt="woman avatar">
            </div>

            <!-- Content -->
            <div class="card-body px-3 py-4">
              <div class="row">
                <div class="col-sm-12 text-center">
                  <p class="font-weight-bold mb-0">Email</p>
                  <p class="small mb-0"><?php echo $_SESSION["datos"]["correo"] ?></p>
                </div>
               
                
              </div>
            </div>

          </div>
          <!-- Card -->
        </div>
      </div>  
     
     
     
      <div class="row mt-5">

        <!--Grid column-->
       <!-- <div class="col-lg-4 col-md-4 mb-4">

          <div class="media blue lighten-2 text-white z-depth-1 rounded">
            <h4 class="blue z-depth-1 p-4 rounded-left text-white font-weight-bold" id="valor_h">100</h4>
            <div class="media-body">
              <p class="text-uppercase mt-2 mb-1 ml-3"><small>Números de hosting a vencimiento</small></p>
              <div class="progress md-progress mb-0 rounded-0">
                <div id="barra_h" class="progress-bar blue darken-2" role="progressbar"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="ml-3 mb-0"><small id="porce_h">0%</small></p>
            </div>
          </div>-->


        </div>
        <!--Grid column-->

        <!--Grid column-->
       <!-- <div class="col-lg-4 col-md-4 mb-4">

          <div class="media deep-purple lighten-2 text-white z-depth-1 rounded">
           <h4 class="deep-purple z-depth-1 p-4 rounded-left text-white font-weight-bold" id="valor_d">100</h4>
            <div class="media-body">
              <p class="text-uppercase mt-2 mb-1 ml-3"><small>Números de dominios a vencimiento</small></p>
              <div class="progress md-progress mb-0 rounded-0">
                <div id="barra_d" class="progress-bar deep-purple darken-3" role="progressbar"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="ml-3 mb-0"><small id="porce_d">76%</small></p>
            </div>
          </div>-->


        </div>
        <!--Grid column-->

        <!--Grid column-->
       <!-- <div class="col-lg-4 col-md-4 mb-4">

          <div class="media pink lighten-2 text-white z-depth-1 rounded">
            <i class="fas fa-download fa-3x pink z-depth-1 p-4 rounded-left text-white"></i>
            <div class="media-body">
              <p class="text-uppercase mt-2 mb-1 ml-3"><small>downloads</small></p>
              <p class="font-weight-bold mb-1 ml-3">13 540</p>
              <div class="progress md-progress mb-0 rounded-0">
                <div class="progress-bar pink darken-4" role="progressbar" style="width: 24%" aria-valuenow="24"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="ml-3 mb-0"><small>24% increase</small></p>
            </div>
          </div>


        </div>-->
        <!--Grid column-->

      </div>
      <!--Grid row-->
     
     
    </div>
  </main>
 
 
 <!-- Addd  -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header info-color-dark">
        <h5 class="modal-title text-white" id="exampleModalLabel">Editar Información</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form class="text-center" style="color: #757575;" action="#!">

            <div class="md-form mt-2">
                <input type="text" id="nombre" class="form-control" value="<?php echo $_SESSION["datos"]["nombre"] ?>">
                <label for="nombre">Nombre Completo</label>
            </div>
          
             <div class="md-form mt-1">
                <input type="tel" id="tel" class="form-control" value="<?php echo $_SESSION["datos"]["tel"] ?>">
                <label for="correo">Teléfono</label>
            </div>
         
            <div class="md-form mt-1">
                <input type="email" id="correo" class="form-control" value="<?php echo $_SESSION["datos"]["correo"] ?>">
                <label for="correo">Correo</label>
            </div>
         
            <div class="md-form mt-1">
                <input type="password" id="pass" class="form-control" value="<?php echo $_SESSION["datos"]["pass"] ?>">
                <label for="pass">Contraseña</label>
            </div>
           
           <p class="m-0 text-left">Estatus</p> 
            <div class="custom-control custom-checkbox text-left">
               <input type="checkbox" class="custom-control-input" id="_activo" >
               <label class="custom-control-label" for="_activo">Activo</label>
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
 $("#m-perfil").addClass("active");

 function btnEditar(){
   let est="<?php echo $acti ?>";
  if(est=1){
    $("#_activo").prop("checked",true);
  }else{
    $("#_activo").prop("checked",false);
  }
 }
 
 $("#btnSave").click(()=>{
  let idd="<?php echo $_SESSION["datos"]["id"] ?>"
  let ttipo="<?php echo $tip; ?>"
  let nombre =$("#nombre").val();
  let tel=$("#tel").val();
  let correo=$("#correo").val();
  let pass=$("#pass").val();
  let activo=$("#_activo").prop("checked") ? 1:0;
  
  if(nombre.length>0 && correo.length>0 && tel.length>0 && pass.length>0){
   $.ajax({
    url:"modelo/m_clientes.php",
    type:"post",
    data:{"op":"add","id":idd,"nombre":nombre,"tel":tel,"correo":correo,"pass":pass,"activo":activo,"tipo":ttipo},
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
 
</script>
  
</body>

</html>
