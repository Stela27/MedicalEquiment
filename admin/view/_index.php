<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<link href="img/favi.png" rel="icon" type="image/x-icon" />
<title>Acceso a plataforma de administración de conocimiento de campañas nprende.</title>
<meta name="theme-color" content="#03A9F4" />
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="css/mdb.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
<style>
 #efecto::after{position: absolute; width: 100%; height: 100%; top: 0; left: 0; content: ""; background: rgba(0, 0, 0, 0.69); z-index: -1;} 
</style>
 
</head>

<body id="efecto"  style="background-image: url('img/slider/slider.jpg'); background-size: cover;">
<main class="" >
 <div class="container" >
 
 <!--Section: Content-->
 <section class="p-md-5 text-center" >
  <form class="my-5 mx-md-5" action="">
  <div class="row">
  <div class="col-md-6 mx-auto">
  <div class="card" style="border-top: 6px solid #03A9F4;">
  
    <!--Card content-->
    <div class="card-body">
     
       <img src="img/logooo.png" class="w-50 d-block mx-auto mb-3" alt="">
        <p class="m-0" style="line-height: 1">Acceso a plataforma de administración de estudios</p>

         <form class="text-center" style="color: #757575;" action="#!">

          <div class="md-form">
            <input type="email" id="correo" class="form-control">
            <label for="correo">Correo</label>
          </div>
  
          <div class="md-form">
            <input type="password" id="pass" class="form-control">
            <label for="pass">Contraseña</label>
          </div>
            <br>

          <button class="btn btn-elegant" id="btnEnviar" type="button">Iniciar</button>
        </form>
     

    </div>
  </div>
  </div>
  </div>
  </form>
 </section>
 </div>
</main>
<?php require("base/script.php"); ?>
<script>
 
 $("#btnEnviar").click(()=>{
  let correo=$("#correo").val();
  let pass=$("#pass").val();
  
  if (correo.length>0 && pass.length>0){
    $.ajax({
     url:"modelo/m_login.php",
     type:"post",
     data:{"correo":correo,"pass":pass,"tipo":'1'},
     dataType:"json",
     error:function(){msm_error();},
     success:function(res){
      
      console.log(res);
      
      if(res.cant>0){
       location.href="perfil.php";
      }else{
       msm_seleccionar("Verifique sus datos de acceso…");
      }
      
     }
     
    });  
  }else{
     msm_vacios("Acomplete todos los datos"); 
  }
 });
</script>
</body>
</html>
