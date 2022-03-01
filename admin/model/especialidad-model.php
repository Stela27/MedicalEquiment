<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_especialidad= new cls_operations();

switch($opcion){
  
 case 'read':
    $result=$obj_especialidad->_read("CALL sp_especialidad_select();");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
  break;
case 'create':
    $especialidad=$_POST['txt-especialidad'] ? $_POST['txt-especialidad']:'';
    $descripcion=$_POST['txt-descripcion'] ? $_POST['txt-descripcion']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_especialidad->_action("CALL sp_especialidad_insert('$especialidad','$descripcion','$status');");

		if ( $afect > 0 ) {
			$mensage = $obj_especialidad->_message_success();
		} else {

      $mensage = $obj_especialidad->_message_error();
		}
    
    echo json_encode($mensage);
  break;
  case 'update':
    $id_especialidad=$_POST['clave'] ? $_POST['clave']:'';
    $especialidad=$_POST['txt-especialidad'] ? $_POST['txt-especialidad']:'';
    $descripcion=$_POST['txt-descripcion'] ? $_POST['txt-descripcion']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_especialidad->_action("CALL sp_especialidad_update('$id_especialidad','$especialidad','$descripcion','$status');");

		if ( $afect > 0 ) {
			$mensage = $obj_especialidad->_message_success();
		} else {

      $mensage = $obj_especialidad->_message_error();
		}
    
		echo json_encode($mensage);
  break;
  
 case 'delete':
    $id_especialidad=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_especialidad->_action("CALL sp_especialidad_delete('$id_especialidad');");

    if ( $afect > 0 ) {
			$mensage = $obj_especialidad->_message_success();
		} else {

      $mensage = $obj_especialidad->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;

  default:
    # code...
    break;
    
}


?>