<?php require("ac_bd.php");
$query= new s_acciones;
$slq=$_POST['cod'] ? $_POST['cod']:'';

$res=$query->consulta("$slq");
while($fil=$res->fetch_assoc()){
?>

<div class="row mt-4">
     <div class="col-md-12 mb-4">
      <div class="card z-depth-1 bordered border-light">
        <div class="card-body p-0">
          <div class="row mx-0">
            <div class="col col-md-3 text-center p-2 img_estudios" style="background: url('admin/estudios/<?php echo $fil['foto'] ?>'); background-size: cover; background-position: center; " >

            </div>
            <div class="col-md-6 rounded-left pt-4 pb-3" >
              <h5 class="font-weight-bold"><?php echo $fil['nombre'] ?></h5>
              <p class="m-0 mb-2 text-muted"><!--<strong>Tipo de estudio:</strong>--> <?php echo $fil['tipo'] ?></p>      
                   <div style="height: 100px;">
               <p class="m-0 mb-2 text-muted" style="line-height: 1"><!--<strong>Descripción: </strong>--><?php echo $fil['descripcion'] ?></p>
            <!-- <p class="m-0 mb-2" style="line-height: 1"><i class="fas fa-map-marker-alt pr-2"></i><?php //echo $fil['domicilio'] ?></p>-->
              </div>
            <!-- <div class="row">
              <?php// if($fil['tel']!=""){?>
               <div class="col-lg-4"><a href="tel:<?php // echo $fil['tel'] ?>" class="black-text"><p class="m-0 mb-2" style="line-height: 1"><i class="fas fa-phone pr-2"></i><?php // echo $fil['tel'] ?></p></a></div>
              <?php // } ?>
              
              <?php // if($fil['tel2']!=""){?>
               <div class="col-lg-4"> <a href="tel:<?php // echo $fil['tel2'] ?>" class="black-text"><p class="m-0 mb-2" style="line-height: 1"><i class="fas fa-phone pr-2"></i><?php // echo $fil['tel2'] ?></p></a></div>
              <?php // }?>
              
              <?php // if($fil['whats']!=""){?>
               <div class="col-lg-4"> <a target="_blank" href="https://api.whatsapp.com/send?phone=52<?php// echo str_replace(" ","",$fil['whats'])?>&text=Hola, me contacto desde la página web" class="black-text"><p class="m-0 mb-2" style="line-height: 1"><i class="fab fa-whatsapp pr-2"></i><?php // echo $fil['whats'] ?></p></a></div>
              <?php // }?>
             </div>-->

            </div>
            <div class="col-md-3 text-center pt-4"  style="background-color:#f8f8f8;">
              <?php if($fil['oferta']==1){ ?>
              <span class="fas fa-tags orange-ic fa-2x" style="position: absolute; right: 12px; top: 10px;"></span>
              <?php }?>
              <p class=" font-weight-normal costo mb-3">$<?php echo number_format($fil['costo'],2,'.',',') ?></p>
              <a href="detalle.php?id=<?php echo $fil['idestudio'] ?>" style="background-color:#11D2CB;color:white;" class="btn btn-md font-weight-bold"><i class="fas fa-info-circle m-1"></i>Más Detalle</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
