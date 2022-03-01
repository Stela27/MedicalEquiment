<?php
session_start();
require("ac_bd.php");
$query = new s_acciones;

$opcion = $_POST['op'] ? $_POST['op'] : '';

switch ($opcion) {

  case 'agenda':
    if(isset($_SESSION["datos"])) {
    $idd = $_SESSION["datos"]["id"];

    $fechac = $_POST['fecha'] ? $_POST['fecha'] : '';    
    $horaestudio = $_POST['horaestudio'] ? $_POST['horaestudio'] : '';
    $nombre = $_POST['nombre'] ? $_POST['nombre'] : '';
    $tel = $_POST['tel'] ? $_POST['tel'] : '';
    $correo = $_POST['correo'] ? $_POST['correo'] : '';
    $email = $_POST['eemail'] ? $_POST['eemail'] : '';
    $coment = $_POST['coment'] ? $_POST['coment'] : '';
    $idestudio = $_POST['id'] ? $_POST['id'] : '';
    $clavecita = $_POST['clavecita'] ? $_POST['clavecita'] : '';
    $fila_afectada=$query->acciones("CALL spi_agendainsert('$idestudio','$fechac','$horaestudio','$nombre','$tel','$correo','$coment','$idd','$clavecita')");

    if($fila_afectada > 0){
      enviar_correo($correo,$nombre,$tel,$email,$fechac,$horaestudio,$correo);
      enviar_correo($email,$nombre,$tel,$email,$fecha,$horaestudio,$correo);
      // $correo estela hehe
      // $email jorge
      $fila_afect=$query->acciones("CALL spi_statusupdate('$clavecita')");
    }
    echo  $fila_afect; 
    }else{
      echo -220; 
    }

    break;


case 'calendar':

    $idclinica=$_POST['estudio']? $_POST['estudio']:'';
    $mes=$_POST['mes']? $_POST['mes']:'';

    $sqll="CALL spi_citafiltro('$idclinica','$mes')";
    $arra_d=array(); 
    $resul=$query->consulta($sqll);
      
    while($datos=$resul->fetch_Assoc()){
      $arra_d[]=$datos;
    }
      
    echo json_encode($arra_d);

  break;

  case 'horarios':

    $idclinica=$_POST['estudio']? $_POST['estudio']:'';
    $fecha=$_POST['fecha']? $_POST['fecha']:'';

    $sqll="CALL spi_citashoras('$idclinica','$fecha')";
    $arra_d=array(); 
    $resul=$query->consulta($sqll);
      
    while($datos=$resul->fetch_Assoc()){
      $arra_d[]=$datos;
    }
      
    echo json_encode($arra_d);

  break;

  case 'coment':
    $idd = $_SESSION["datos"]["id"];
    $nombre = $_POST['nombre'] ? $_POST['nombre'] : '';
    $idestudio = $_POST['idestudio'] ? $_POST['idestudio'] : '';
    //$idadmin=2; //sacr por id sesion
    $evaluacion = $_POST['evaluacion'] ? $_POST['evaluacion'] : '';
    $no_encanta = $_POST['no_encanta'] ? $_POST['no_encanta'] : '';
    $public = $_POST['public'] ? $_POST['public'] : '';
    $coment = $_POST['coment'] ? $_POST['coment'] : '';

    $resul = $query->consulta("CALL spi_coment('0','$idestudio','$idd','$nombre','$coment','$public','$evaluacion','$no_encanta');");

    $datos = $resul->fetch_assoc();
    echo $datos['id'];

    break;
}

function enviar_correo($corre,$nombre,$tel,$emaill,$fecha,$horaestudio,$correo_m){
      //contacto@afsoluciones.com
    // $para  = 'contacto@afsoluciones.com';
    $para  = $corre;
    $msg = 'Nombre Completo: '.$nombre."\n". 'Teléfono: '.$tel . "\n".'Correo:' .$emaill ."\n".'Fecha de cita:'.$fechac."\n".'Hora de cita:'.$horaestudio;
    $titulo = 'Nueva cita';
    $mensaje = $msg;
    $cabeceras = 'From:' .$correo_m. "\r\n" .
      'Reply-To:' .$correo_m. "\r\n" .
      'X-Mailer: PHP/' . phpversion();
    mail($para, utf8_decode($titulo), utf8_decode($mensaje), $cabeceras);
      //id login cliente
}