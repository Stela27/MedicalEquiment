
<?php
require_once('ac_bd.php');
$sql= new s_acciones;

$accion = $_POST['op'] ? $_POST['op']:'';

switch ($accion) {

	case 'add':		
  $accion=0;
  $id=$_POST['id'] ? $_POST['id']:'';
  $ruta="../estudios/";
		$image = basename($_FILES['file_to_upload']['name']);
 
  
  $filename = $id.'_'.$image;  
  $ext = pathinfo($filename, PATHINFO_EXTENSION);  
  $valid_ext = array("png","jpeg","jpg");
  
  if(in_array($ext, $valid_ext)){
   $path = $ruta.$filename;
   if(move_uploaded_file($_FILES['file_to_upload']['tmp_name'], $path)){
    	$accion=1;
   }else{
     $accion=0;
   }
  }
  
  
  
		if ($accion ==1) {
			echo('Se subió el archivo con éxito..');
			$res =$sql->consulta("call spi_saveimg('$id','$filename')");
   $resf=$res->fetch_assoc();
      
			if ($resf['id']>0) {
				echo(' Se guardo con éxito.');
			} else {
				echo( ' ... Se Produjo un Error.' );
			}
		} else {
			echo( 'Se produjo un error al subir archivo' );
		}		
		
		break;	
 
  
  
}



?>