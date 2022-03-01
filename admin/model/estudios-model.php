<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_estudio= new cls_operations();

switch($opcion){
  
 case 'read':
  // colocar id de la persona
    $result=$obj_estudio->_read("CALL sp_estudio_select(3);");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
   
  break;
case 'create':
    $estudio=$_POST['txt-estudio'] ? $_POST['txt-estudio']:'';
    $clinica=$_POST['cmb-clinica'] ? $_POST['cmb-clinica']:'';
    $descripcion=$_POST['txt-descripcion'] ? $_POST['txt-descripcion']:'';
    $especialidad=$_POST['cmb-especialidad'] ? $_POST['cmb-especialidad']:'';
    $costo=$_POST['txt-costo'] ? $_POST['txt-costo']:'';
    $costoferta=$_POST['txt-costoferta'] ? $_POST['txt-costoferta']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_estudio->_action("CALL sp_estudio_insert('$estudio','$descripcion','$especialidad','$clinica','$costo','$costoferta','$status');");

		if ( $afect > 0 ) {
			$mensage = $obj_estudio->_message_success();
		} else {
      $mensage = $obj_estudio->_message_error();
		}
    
    echo json_encode($mensage);
  break;
  case 'update':
    $id_estudio=$_POST['clave'] ? $_POST['clave']:'';
    $estudio=$_POST['txt-estudio'] ? $_POST['txt-estudio']:'';
    $clinica=$_POST['cmb-clinica'] ? $_POST['cmb-clinica']:'';
    $descripcion=$_POST['txt-descripcion'] ? $_POST['txt-descripcion']:'';
    $especialidad=$_POST['cmb-especialidad'] ? $_POST['cmb-especialidad']:'';
    $costo=$_POST['txt-costo'] ? $_POST['txt-costo']:'';
    $costoferta=$_POST['txt-costoferta'] ? $_POST['txt-costoferta']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_estudio->_action("CALL sp_estudio_update('$id_estudio','$estudio','$descripcion','$especialidad','$clinica','$costo','$costoferta','$status');");

		if ( $afect > 0 ) {
			$mensage = $obj_estudio->_message_success();
		} else {

      $mensage = $obj_estudio->_message_error();
		}
    
		echo json_encode($mensage);
  break;
  
 case 'delete':
    $id_estudio=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_estudio->_action("CALL sp_estudio_delete('$id_estudio');");

    if ( $afect > 0 ) {
			$mensage = $obj_estudio->_message_success();
		} else {
      $mensage = $obj_estudio->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;
  case 'select_especialidad':
    // colocar id de la persona
    $result=$obj_estudio->_read("CALL sp_especialidad_list(3);");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
  break;
  case 'select_clinica':
    // colocar id de la persona
    $result=$obj_estudio->_read("CALL sp_direcc_list(3);");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
  break;

  default:
    # code...
    break;
    
}


?>