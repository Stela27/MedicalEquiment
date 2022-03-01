<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_direcc= new cls_operations();

switch($opcion){
  
 case 'read':
  // colocar el id de la persona
    $result=$obj_direcc->_read("CALL sp_direcc_select(3);");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
   
  break;
case 'create':
    $lugar=$_POST['txt-lugar'] ? $_POST['txt-lugar']:'';
    $sitio=$_POST['txt-sitio'] ? $_POST['txt-sitio']:'';
    $facebook=$_POST['txt-facebook'] ? $_POST['txt-facebook']:'';
    $instagram=$_POST['txt-instagram'] ? $_POST['txt-instagram']:'';
    $geolocalizacion=$_POST['txt-geo'] ? $_POST['txt-geo']:'';
    $tel1=$_POST['txt-telefono1'] ? $_POST['txt-telefono1']:'';
    $tel2=$_POST['txt-telefono2'] ? $_POST['txt-telefono2']:'';
    $whats=$_POST['txt-whats'] ? $_POST['txt-whats']:'';
    $estado=$_POST['txt-estado'] ? $_POST['txt-estado']:'';
    $municipio=$_POST['txt-municipio'] ? $_POST['txt-municipio']:'';
    $localidad=$_POST['txt-localidad'] ? $_POST['txt-localidad']:'';
    $calle=$_POST['txt-calle'] ? $_POST['txt-calle']:'';
    $numero=$_POST['txt-numero'] ? $_POST['txt-numero']:'';
    $cp=$_POST['txt-cp'] ? $_POST['txt-cp']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_direcc->_action("CALL sp_direcc_insert('$lugar','$sitio','$facebook','$instagram','$geolocalizacion','$tel1','$tel2','$whats','$estado','$municipio','$calle','$numero','$localidad','$cp','$status',1);");

		if ( $afect > 0 ) {
			$mensage = $obj_direcc->_message_success();
		} else {
      $mensage = $obj_direcc->_message_error();
		}
    
    echo json_encode($mensage);
  break;
  case 'update':
    $id_direcc=$_POST['clave'] ? $_POST['clave']:'';
    $lugar=$_POST['txt-lugar'] ? $_POST['txt-lugar']:'';
    $sitio=$_POST['txt-sitio'] ? $_POST['txt-sitio']:'';
    $facebook=$_POST['txt-facebook'] ? $_POST['txt-facebook']:'';
    $instagram=$_POST['txt-instagram'] ? $_POST['txt-instagram']:'';
    $geolocalizacion=$_POST['txt-geo'] ? $_POST['txt-geo']:'';
    $tel1=$_POST['txt-telefono1'] ? $_POST['txt-telefono1']:'';
    $tel2=$_POST['txt-telefono2'] ? $_POST['txt-telefono2']:'';
    $whats=$_POST['txt-whats'] ? $_POST['txt-whats']:'';
    $estado=$_POST['txt-estado'] ? $_POST['txt-estado']:'';
    $municipio=$_POST['txt-municipio'] ? $_POST['txt-municipio']:'';
    $localidad=$_POST['txt-localidad'] ? $_POST['txt-localidad']:'';
    $calle=$_POST['txt-calle'] ? $_POST['txt-calle']:'';
    $numero=$_POST['txt-numero'] ? $_POST['txt-numero']:'';
    $cp=$_POST['txt-cp'] ? $_POST['txt-cp']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_direcc->_action("CALL sp_direcc_update('$id_direcc','$lugar','$sitio','$facebook','$instagram','$geolocalizacion','$tel1','$tel2','$whats','$estado','$municipio','$calle','$numero','$localidad','$cp','$status',1);");

		if ( $afect > 0 ) {
			$mensage = $obj_direcc->_message_success();
		} else {

      $mensage = $obj_direcc->_message_error();
		}
    
		echo json_encode($mensage);
  break;
  
 case 'delete':
    $id_direcc=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_direcc->_action("CALL sp_direcc_delete('$id_direcc');");

    if ( $afect > 0 ) {
			$mensage = $obj_direcc->_message_success();
		} else {
      $mensage = $obj_direcc->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;

  default:
    # code...
    break;
    
}


?>