<?php 

require_once("base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_estudio= new cls_operations();

switch($opcion){
  
    case 'read':
        $result=$obj_estudio->_read("CALL sp_perfil_select(2);");
        $json=array();	
            while($row=$result->fetch_assoc()){				
            $json[]=$row;
            }
            echo json_encode($json);
       
      break;
  case 'update':
    $id_perfil=1;// id_perfil
    $id_persona=2; 
    $usuario=$_POST['txt-usuario'] ? $_POST['txt-usuario']:'';
    $password=$_POST['txt-pass'] ? $_POST['txt-pass']:'';
    $nombre=$_POST['txt-nombre'] ? $_POST['txt-nombre']:'';
    $apellido_p=$_POST['txt-ap'] ? $_POST['txt-ap']:'';
    $apellido_m=$_POST['txt-am'] ? $_POST['txt-am']:'';
    $correo=$_POST['txt-correo'] ? $_POST['txt-correo']:'';
    $telefono=$_POST['txt-tel'] ? $_POST['txt-tel']:'';
    $image = $_POST['image'];

    $file_archive = $_FILES["fil_user"]["name"];
    $tmp_archive = $_FILES["fil_user"]["tmp_name"];   
    $type_archive ='IMAGE';
    $directory='../view/img/users/';

    if($file_archive != ""){

      $extension_archive = pathinfo($file_archive, PATHINFO_EXTENSION);
      if(validate_archive($extension_archive,$type_archive)){

          $name_archive = $id_perfil.'_'.$type_archive .'.'. $extension_archive;

          $afect=$obj_estudio->_action("CALL sp_perfil_paciente_update_img('$id_persona','$id_perfil','$name_archive','$usuario','$password',' $nombre','$apellido_p','$apellido_m',' $correo','$telefono');");

          if($afect > 0){

              $route_archive = $directory.$name_archive;
              if($image !="paciente.jpg" || $image !="medico.jpg" ){unlink($directory.$image);}
              move_uploaded_file($tmp_archive, $route_archive);

              $mensage = $obj_estudio->_message_success();
          }else{
              $mensage = $obj_estudio->_message_error();
          }
      }else{
              $mensage = $obj_estudio->_message_error_image();
      }
  }else{
          $afect=$obj_estudio->_action("CALL sp_perfil_paciente_update('$id_persona','$id_perfil','$usuario','$password',' $nombre','$apellido_p','$apellido_m',' $correo','$telefono');");

          if($afect > 0){
            $mensage = $obj_estudio->_message_success();
          }else{
            $mensage = $obj_estudio->_message_error();
          }
  }
  echo json_encode($mensage);
    break;
  default:
    # code...
    break;
    
}

function validate_archive($extension_archive,$type_archive){
  $extensions = array("IMAGE"=> array("png","jpeg","jpg"),
                       "MUSIC"=> array("mp3","mp4","wav","wma"),
                       "VIDEO"=> array("mp4","avi","mpeg","mwv"),
                       "DOCUMENT"=> array("pdf","docx","pptx","ppsx","xlsx")
                      );
  return (in_array($extension_archive,$extensions[$type_archive]));
}

?>