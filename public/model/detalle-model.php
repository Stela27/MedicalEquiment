<?php 

require_once("../../admin/model/base-model.php");


$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_detalle= new cls_operations();

switch($opcion){
  
    case 'read':
        $result=$obj_detalle->_read("CALL sp_detalle_select(1);");
        $json=array();	
            while($row=$result->fetch_assoc()){				
            $json[]=$row;
            }
            echo json_encode($json);
       
      break;

      case 'read_img':
        $result=$obj_detalle->_read("CALL sp_detalle_imagen_select(1);");
        $json=array();	
            while($row=$result->fetch_assoc()){				
            $json[]=$row;
            }
            echo json_encode($json);
       
      break;

      case 'read_comentarios':
        $result=$obj_detalle->_read("CALL sp_comentarios_select(1);");
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