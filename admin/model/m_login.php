<?php 
session_start();

require("ac_bd.php");
$sql=new s_acciones;

$correo=$_POST['correo'] ? $_POST['correo']:'';
$pass=$_POST['pass'] ? $_POST['pass']:'';
$tipo=$_POST['tipo'] ? $_POST['tipo']:'';

$resul=$sql->consulta("CALL spq_login('$correo','$pass','$tipo')");


$datos=$resul->fetch_assoc();

if($datos['id_admin']!=null){
    $_SESSION["datos"]["nombre"]=$datos['nombre'];
    $_SESSION["datos"]["id"]=$datos['id_admin'];
    $_SESSION["datos"]["correo"]=$datos['correo'];
    $_SESSION["datos"]["tel"]=$datos['tel'];
    $_SESSION["datos"]["pass"]=$datos['pass'];
    $_SESSION["datos"]["activo"]=$datos['activo'];
    $_SESSION["datos"]["tipo"]=$datos['idtipo_user'];
}

echo(json_encode($datos));
