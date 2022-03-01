<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_estudio= new cls_operations();

switch($opcion){
  
 case 'read':
    $result=$obj_estudio->_read("CALL sp_horario_select();");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
   
  break;
case 'create':
    $clinica=$_POST['cmb-clinica'] ? $_POST['cmb-clinica']:'';
    $estudio=$_POST['cmb-estudio'] ? $_POST['cmb-estudio']:'';
    $especialidad=$_POST['cmb-especialidad'] ? $_POST['cmb-especialidad']:'';
    $fechacita=$_POST['txt-fechacita'] ? $_POST['txt-fechacita']:'';
    $hinicio=$_POST['txt-hinicio'] ? $_POST['txt-hinicio']:'';
    $htermino=$_POST['txt-htermino'] ? $_POST['txt-htermino']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_estudio->_action("CALL sp_horario_insert('$clinica','$estudio','$especialidad','$fechacita','$hinicio','$htermino','$status');");

		if ( $afect > 0 ) {
			$mensage = $obj_estudio->_message_success();
		} else {
      $mensage = $obj_estudio->_message_error();
		}
    
    echo json_encode($mensage);
  break;
  case 'update':
    $id_horario=$_POST['clave'] ? $_POST['clave']:'';
    $clinica=$_POST['cmb-clinica'] ? $_POST['cmb-clinica']:'';
    $estudio=$_POST['cmb-estudio'] ? $_POST['cmb-estudio']:'';
    $especialidad=$_POST['cmb-especialidad'] ? $_POST['cmb-especialidad']:'';
    $fechacita=$_POST['txt-fechacita'] ? $_POST['txt-fechacita']:'';
    $hinicio=$_POST['txt-hinicio'] ? $_POST['txt-hinicio']:'';
    $htermino=$_POST['txt-htermino'] ? $_POST['txt-htermino']:'';
    $status=$_POST['cmb-status'] ? $_POST['cmb-status']:'0';

    $afect=$obj_estudio->_action("CALL sp_horario_update('$id_horario','$clinica','$estudio','$especialidad','$fechacita','$hinicio','$htermino','$status');");

		if ( $afect > 0 ) {
			$mensage = $obj_estudio->_message_success();
		} else {

      $mensage = $obj_estudio->_message_error();
		}
    
		echo json_encode($mensage);
  break;
  
 case 'delete':
    $id_horario=$_POST['clave'] ? $_POST['clave']:'';

    $afect=$obj_estudio->_action("CALL sp_horario_delete('$id_horario');");

    if ( $afect > 0 ) {
			$mensage = $obj_estudio->_message_success();
		} else {
      $mensage = $obj_estudio->_message_error();
		}
    
    echo json_encode($mensage);
 
  break;
  case 'select_direcc':
    // colocar id de la persona
    $result=$obj_estudio->_read("CALL sp_direcc_list(3);");
    $json=array();	
		while($row=$result->fetch_assoc()){				
		$json[]=$row;
		}
		echo json_encode($json);
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


  case 'select_estudio':
    $id_especialidad=$_POST['clave'] ? $_POST['clave']:'';
    // colocar el id de la persona
    $result=$obj_estudio->_read("CALL sp_estudio_list(3,'$id_especialidad');");
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