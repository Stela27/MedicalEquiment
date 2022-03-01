<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_agendac= new cls_operations();

switch($opcion){
  
 case 'read':
    $result=$obj_agendac->_read("CALL sp_agendacliente_select();");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
   
  break;
 case 'cancelar':
    $id_agendap=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_agendac->_action("CALL sp_agenda_estatus_nop('$id_agendap');");

    if ( $afect > 0 ) {
			$mensage = $obj_agendac->_message_success();
		} else {
      $mensage = $obj_agendac->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;
  default:
    # code...
    break;
    
}


?>