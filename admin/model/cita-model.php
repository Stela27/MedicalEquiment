<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_cita= new cls_operations();

switch($opcion){
  case 'select_especialidad':
    // colocar id de la persona
    $result=$obj_cita->_read("CALL sp_especialidad_list(3);");
    $json=array();	
    while($row=$result->fetch_assoc()){				
    $json[]=$row;
    }
    echo json_encode($json);
  break;


  case 'select_estudio':
    $id_especialidad=$_POST['clave'] ? $_POST['clave']:'';
    // colocar el id de la persona
    $result=$obj_cita->_read("CALL sp_estudio_list(3,'$id_especialidad');");
    $json=array();	
    while($row=$result->fetch_assoc()){				
    $json[]=$row;
    }
    echo json_encode($json);
  break;
  case 'select_direcc':
    // colocar id de la persona
    $result=$obj_cita->_read("CALL sp_direcc_list(3);");
    $json=array();	
    while($row=$result->fetch_assoc()){				
    $json[]=$row;
    }
    echo json_encode($json);
  break;
  // case 'select_estudio':
  //   $result=$obj_cita->_read("CALL sp_estudio_list(1);");
  //   $json=array();	
	// 	while($row=$result->fetch_assoc()){				
	// 	$json[]=$row;
	// 	}
	// 	echo json_encode($json);
  // break;

  case 'calendar':
    $idestudio=$_POST['estudio']? $_POST['estudio']:'';
    $mes=$_POST['mes']? $_POST['mes']:'';
    $especilidad=$_POST['especialidad']? $_POST['especialidad']:'';
    $clinica=$_POST['clinica']? $_POST['clinica']:'';
    $result=$obj_cita->_read("CALL sp_horario_filtro('$idestudio','$mes','$especilidad','$clinica');");
    $json=array();	
    while($row=$result->fetch_assoc()){				
    $json[]=$row;
    }
    echo json_encode($json);
    break;

    case 'read':
      $idestudio=$_POST['estudio']? $_POST['estudio']:'';
      $fecha=$_POST['fechaseleccionada']? $_POST['fechaseleccionada']:'';
      $especialidad=$_POST['especialidad']? $_POST['especialidad']:'';
      $clinica=$_POST['clinica']? $_POST['clinica']:'';

      $result=$obj_cita->_read("CALL sp_cita_filtro('$idestudio','$fecha','$especialidad','$clinica');");
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