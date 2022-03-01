<?php session_start();
if(!isset($_SESSION["datos"])){
 header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="es">

<?php require("base/head.php"); ?>



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
     


      <div class="row wow fadeIn">


        <div class="col-md-12 mb-4">
          <div class="card">
            <div class="card-body">
             <div class="table-responsive">
              <table class="table table-sm table-striped tbl_d" id="dtable">
                <thead class="table-dark text-center">
                  <tr>
                   <!-- <th>#</th>-->
                    <th>Nombre</th>
                    <th>Contacto</th>
                    <th>Teléfono</th>
                    <th>Correo</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Vencimiento</th>
                    <th>Dias</th>
                    <th>Estatus</th>
                   
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
 
 

  <!--Footer-->
 <?php // require("base/footer.php"); ?>


<?php require("base/script.php"); ?>
 
<script>
 $("#m-host").addClass("active");
 var idd=0;
 var iddMoney=0;
 var iddCliente=0;

  var table = $('.tbl_d').DataTable({
    "ordering":false,
    "language": {
       "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"     
     }  
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
    data: {"query":"SELECT * FROM `vv_hosting`"},
    error: function (){alert("Error de conexión")},
    success: function(res){ 
     
     $("#dtable").fadeIn(2000);
     let str='';
     let style='';
     for(var f=0; f<res.length; f++){
     if(res[f].dias<=30){style='background: red; color:white';}else{style='background: green; color:white';}
      
      var text='';
      if(res[f].activo==1){text="Activo";}else{text="Inactivo";}
      str+='<tr>';
       str+='<td>'+res[f].nombre+'</td>';
       str+='<td>'+res[f].contacto+'</td>';
       str+='<td>'+res[f].telefono+'</td>';
       str+='<td>'+res[f].correo+'</td>';
       str+='<td>'+res[f].hInicio+'</td>';
       str+='<td>'+res[f].hFin+'</td>';
       str+='<td class="text-center" style="'+style+'">'+res[f].dias+'</td>';
       str+='<td class="text-center">'+text+'</td>';
     }
     
      table.rows.add($(str)).draw();
    }
  });
 }
 

 
 
 
 
</script>
  
</body>

</html>
