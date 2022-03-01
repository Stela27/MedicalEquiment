<?php 

require_once("../../admin/model/base-model.php");


$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_filtro= new cls_operations();

switch($opcion){
  

    //   case 'read_img':
    //     $result=$obj_filtro->_read("CALL sp_detalle_imagen_select(1);");
    //     $json=array();	
    //         while($row=$result->fetch_assoc()){				
    //         $json[]=$row;
    //         }
    //         echo json_encode($json);
       
    //   break;

      case 'read_filtro':
        $estudio=$_POST['txt_estudio'] ? $_POST['txt_estudio']:'';
        $buscar=$_POST['txt_search'] ? $_POST['txt_search']:'';
        $result=$obj_filtro->_read("CALL sp_filtro_estudio('$estudio','$buscar');");
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