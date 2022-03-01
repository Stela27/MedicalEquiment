<?php 
session_start();
require("ac_bd.php");
$query= new s_acciones;

$opcion=$_POST['op'] ? $_POST['op']:'';


switch($opcion){
  
 case 'add':  // agregra y actualiza registro en base de datos

  $id=$_POST['id']? $_POST['id']:'';
  $lunes=$_POST['lunes']? $_POST['lunes']:'';
  $lunes2=$_POST['lunes2']? $_POST['lunes2']:'';
  $martes=$_POST['martes']? $_POST['martes']:'';
  $martes2=$_POST['martes2']? $_POST['martes2']:'';
  $miercoles=$_POST['miercoles']? $_POST['miercoles']:'';
  $miercoles2=$_POST['miercoles2']? $_POST['miercoles2']:'';
  $jueves=$_POST['jueves']? $_POST['jueves']:'';
  $jueves2=$_POST['jueves2']? $_POST['jueves2']:'';
  $viernes=$_POST['viernes']? $_POST['viernes']: '';
  $viernes2=$_POST['viernes2']? $_POST['viernes2']: '';
  $sabado=$_POST['sabado']? $_POST['sabado']: '';
  $sabado2=$_POST['sabado2']? $_POST['sabado2']: '';
  $domingo=$_POST['domingo']? $_POST['domingo']:'';
  $domingo2=$_POST['domingo2']? $_POST['domingo2']:'';


  $resul=$query->consulta("CALL `spi_horarios`('','$id','$lunes','$lunes2','$martes','$martes2','$miercoles','$miercoles2','$jueves','$jueves2','$viernes','$viernes2','$sabado','$sabado2','$domingo','$domingo2');");
 
  $datos=$resul->fetch_assoc();
  echo $datos['id'];  
  
  break;

}
