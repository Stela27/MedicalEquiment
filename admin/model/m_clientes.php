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
  $tel=$_POST['tel'] ? $_POST['tel']:'';
  $correo=$_POST['correo'] ? $_POST['correo']:'';
  $pass=$_POST['pass'] ? $_POST['pass']:'';
  $activo=$_POST['activo'] ? $_POST['activo']:'';
  
  $resul=$query->consulta("CALL spi_user('$id','$nombre','$correo','$pass','$tel','$activo','$tipo');");
  
  $datos=$resul->fetch_assoc();
  echo $datos['id'];  
  
  break;
  
 case 'delete':
 
  break;
    
}











?>