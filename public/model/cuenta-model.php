<?php 

require_once("../../admin/model/base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_direcc= new cls_operations();

switch($opcion){
  
case 'create':
    $nombre=$_POST['txt_nombre'] ? $_POST['txt_nombre']:'';
    $apellidop=$_POST['txt_apellidop'] ? $_POST['txt_apellidop']:'';
    $apellidom=$_POST['txt_apellidom'] ? $_POST['txt_apellidom']:'';
    $tel=$_POST['txt_tel'] ? $_POST['txt_tel']:'';
    $usuario=$_POST['txt_user'] ? $_POST['txt_user']:'';
    $email=$_POST['txt_email'] ? $_POST['txt_email']:'';
    $pass=$_POST['txt_pass'] ? $_POST['txt_pass']:'';

    $afect=$obj_direcc->_action("CALL sp_cuenta_paciente_insert('$usuario','$pass','$nombre','$apellidop','$apellidom','$email','$tel');");

		if ( $afect > 0 ) {
      $mensage = $obj_direcc->_message_login();
		} else {
      $mensage = $obj_direcc->_message_error();
		}
    
    echo json_encode($mensage);
  break;
 
  default:
    # code...
    break;
    
}


?>