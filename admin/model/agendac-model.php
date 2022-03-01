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
// case 'create':
//     $estudio=$_POST['txt-estudio'] ? $_POST['txt-estudio']:'';
//     $descripcion=$_POST['txt-descripcion'] ? $_POST['txt-descripcion']:'';
//     $especialidad=$_POST['cmb-especialidad'] ? $_POST['cmb-especialidad']:'';
//     $costo=$_POST['txt-costo'] ? $_POST['txt-costo']:'';
//     $costoferta=$_POST['txt-costoferta'] ? $_POST['txt-costoferta']:'';
//     $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

//     $afect=$obj_agendac->_action("CALL sp_estudio_insert('$estudio','$descripcion','$especialidad',1,'$costo','$costoferta','$status');");

// 		if ( $afect > 0 ) {
// 			$mensage = $obj_agendac->_message_success();
// 		} else {
//       $mensage = $obj_agendac->_message_error();
// 		}
    
//     echo json_encode($mensage);
//   break;
  case 'update':
    $id_agendac=$_POST['clave'] ? $_POST['clave']:'';
    $comentario=$_POST['txt-comentario'] ? $_POST['txt-comentario']:'';

    $afect=$obj_agendac->_action("CALL sp_agenda_estatus_cancelar('$id_agendac','$comentario');");

		if ( $afect > 0 ) {
			$mensage = $obj_agendac->_message_success();
		} else {

      $mensage = $obj_agendac->_message_error();
		}
    
		echo json_encode($mensage);
  break;
  
 case 'cancelar':
    $id_agendac=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_agendac->_action("CALL sp_agenda_estatus_nop('$id_agendac');");

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