<?php 
session_start();
require("ac_bd.php");
$query= new s_acciones;

$opcion=$_POST['op'] ? $_POST['op']:'';

switch($opcion){
  
 case 'add':
  $id=$_POST['id'] ? $_POST['id']:'';
  $nombre=$_POST['nombre'] ? $_POST['nombre']:'';
  $tipo=$_POST['tipo'] ? $_POST['tipo']:'';
  $desc=$_POST['desc'] ? $_POST['desc']:'';
  $domicilio=$_POST['domicilio'] ? $_POST['domicilio']:'';
  $correo=$_POST['correo'] ? $_POST['correo']:'';
  $geo=$_POST['geo'] ? $_POST['geo']:'';
  $tel=$_POST['tel'] ? $_POST['tel']:'';
  $tel2=$_POST['tel2'] ? $_POST['tel2']:'';
  $whats=$_POST['whats'] ? $_POST['whats']:'';
  $costo=$_POST['costo'] ? $_POST['costo']:'';
  $costo_of=$_POST['costo_of'] ? $_POST['costo_of']:'';
  $oferta=$_POST['oferta'] ? $_POST['oferta']:'';
  $activo=$_POST['activo'] ? $_POST['activo']:'';
  $estado=$_POST['estado'] ? $_POST['estado']:'';

  $resul=$query->consulta("CALL  spi_estudio('$id', '$nombre','$tipo','$desc','$correo','$domicilio','$geo','$tel','$tel2','$whats','$costo','$costo_of','$oferta','$activo','$estado')");
 
  $datos=$resul->fetch_assoc();
  echo $datos['id'];  
  
  break;
  
 case 'delete':
 
  break;
    
}











?>