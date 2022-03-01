<?php 

require_once("../../admin/model/base-model.php");

$opcion=$_POST['option'] ? $_POST['option']:'';

$obj_direcc= new cls_operations();

switch($opcion){
  
case 'create':
    $nombre=$_POST['txt_nombre'] ? $_POST['txt_nombre']:'';
    $apellidop=$_POST['txt_apellidop'] ? $_POST['txt_apellidop']:'';
    $apellidom=$_POST['txt_apellidom'] ? $_POST['txt_apellidom']:'';
    $ncedula=$_POST['txt_cedula'] ? $_POST['txt_cedula']:'';
    $rsocial=$_POST['txt_rsocial'] ? $_POST['txt_rsocial']:'';
    $tel=$_POST['txt_tel'] ? $_POST['txt_tel']:'';
    $rfc=$_POST['txt_rfc'] ? $_POST['txt_rfc']:'';
    $domicilio=$_POST['txt_domicilio'] ? $_POST['txt_domicilio']:'';
    $usuario=$_POST['txt_user'] ? $_POST['txt_user']:'';
    $email=$_POST['txt_email'] ? $_POST['txt_email']:'';
    $pass=$_POST['txt_pass'] ? $_POST['txt_pass']:'';
    $clinica=$_POST['txt_nclinica'] ? $_POST['txt_nclinica']:'';
    $estado=$_POST['txt_estado'] ? $_POST['txt_estado']:'';
    $municipio=$_POST['txt_municipio'] ? $_POST['txt_municipio']:'';
    $calle=$_POST['txt_calle'] ? $_POST['txt_calle']:'';
    $numero=$_POST['txt_numero'] ? $_POST['txt_numero']:'';
    $localidad=$_POST['txt_localidad'] ? $_POST['txt_localidad']:'';
    $cp=$_POST['txt_cp'] ? $_POST['txt_cp']:'';
    $sitio=$_POST['txt_sitio'] ? $_POST['txt_sitio']:'';
    $facebook=$_POST['txt_facebook'] ? $_POST['txt_facebook']:'';
    $instagram=$_POST['txt_instagram'] ? $_POST['txt_instagram']:'';
    $geo=$_POST['txt_geo'] ? $_POST['txt_geo']:'';
    $tel1=$_POST['txt_tel1'] ? $_POST['txt_tel1']:'';
    $tel2=$_POST['txt_tel2'] ? $_POST['txt_tel2']:'';
    $whats=$_POST['txt_whats'] ? $_POST['txt_whats']:'';


    $afect=$obj_direcc->_action("CALL sp_cuenta_medico_insert('$usuario','$pass','$nombre','$apellidop','$apellidom','$email','$tel','$domicilio','$rfc','$ncedula','$rsocial','$clinica','$sitio','$facebook','$instagram','$geo','$tel1','$tel2','$whats','$estado','$municipio','$calle','$numero','$localidad','$cp');");

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