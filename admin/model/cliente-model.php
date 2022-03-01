<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_cliente= new cls_operations();

switch($opcion){
  
 case 'read':
  // colocar el id de la persona
    $result=$obj_cliente->_read("CALL sp_cliente_select();");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
   
  break;
 case '_desactivar':
    $id_cliente=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_cliente->_action("CALL sp_cliente_status_desactivar('$id_cliente');");

    if ( $afect > 0 ) {
			$mensage = $obj_cliente->_message_success();
		} else {
      $mensage = $obj_cliente->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;
  case '_activar_':
    $id_cliente=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_cliente->_action("CALL sp_cliente_status_activo('$id_cliente');");

    if ( $afect > 0 ) {
			$mensage = $obj_cliente->_message_success();
		} else {
      $mensage = $obj_cliente->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;

  default:
    # code...
    break;
    
}


?>