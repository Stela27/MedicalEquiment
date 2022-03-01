<?php require("ac_bd.php");
$query= new s_acciones;

$sqll=$_POST['query'] ? $_POST['query']:'';
$arra_d=array(); 
$resul=$query->consulta($sqll);

while($datos=$resul->fetch_Assoc()){
 $arra_d[]=$datos;
}

echo json_encode($arra_d);
?>