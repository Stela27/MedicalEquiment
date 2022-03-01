<?php 

require_once("../../admin/model/base-model.php");


session_start();
$opcion=$_POST['option'] ? $_POST['option']:'';
$obj_sesion= new cls_operations();

switch($opcion){

    // case 'select_tipo':
    //     $result=$obj_sesion->_read("CALL sp_rol_list();");
    //     $json=array();	
    //         while($row=$result->fetch_assoc()){				
    //         $json[]=$row;
    //         }
    //         echo json_encode($json);
    //   break;

    case 'read':
        // $rol=$_POST['txt_rol'] ? $_POST['txt_rol']:'';
        $user=$_POST['txt_user'] ? $_POST['txt_user']:'';
        $password=$_POST['txt_pass'] ? $_POST['txt_pass']:'';
        
        $result=$obj_sesion->_read("CALL sp_sesion_select('$user','$password');");
        $json=array();	
            while($row=$result->fetch_assoc()){				
            $json[]=$row;
            }
            if(!empty($json[0]["persona_id"])){
                $_SESSION['id_persona']=$json[0]["persona_id"];
                // $_SESSION['id_rol']=$json[0]["perfil_idrol"];
                $mensage = $obj_sesion->_message_login();
            } else {
                 $mensage = $obj_sesion->_message_nofound();
            }
            echo json_encode($mensage);
       
      break;
      
  default:
    # code...
    break;
    
}

?>