
<?php 
// session_start();
require("ac_bd.php");
$query= new s_acciones;

$opcion=$_POST['op'] ? $_POST['op']:'';


switch($opcion){

    case 'select':

        $sqll="CALL spi_citasselect()";
        $arra_d=array(); 
        $resul=$query->consulta($sqll);
        
        while($datos=$resul->fetch_Assoc()){
         $arra_d[]=$datos;
        }
        
        echo json_encode($arra_d);

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
  
        case 'insert':  // agregra y actualiza registro en base de datos

        $fecha_selec=$_POST['fecha_seleccionada']? $_POST['fecha_seleccionada']:'';
        $estudio=$_POST['estudio']? $_POST['estudio']:'';
        $hora_inicio=$_POST['horainicio']? $_POST['horainicio']:'';
        $horafin=$_POST['horafin']? $_POST['horafin']:'';
        $estado=$_POST['stado']? $_POST['stado']:'';
        $fila_afectada=$query->acciones("CALL `spi_citasinsert`('$estudio','$fecha_selec','$hora_inicio','$horafin','$estado');");
        
        echo $fila_afectada;  
        
        break;

        case 'delete':  // agregra y actualiza registro en base de datos

            $id=$_POST['clave']? $_POST['clave']:'';
            
            $fila_afectada=$query->acciones("CALL `spi_citasdelete`('$id');");
            
            echo $fila_afectada;  
            
            break;

        case 'update':
            $fecha_selec=$_POST['fecha_seleccionada']? $_POST['fecha_seleccionada']:'';
            $clave=$_POST['clavecita']? $_POST['clavecita']:'';
            $estudio=$_POST['estudio']? $_POST['estudio']:'';
            $hora_inicio=$_POST['horainicio']? $_POST['horainicio']:'';
            $horafin=$_POST['horafin']? $_POST['horafin']:'';
            $estado=$_POST['stado']? $_POST['stado']:'0';
            $fila_afectada=$query->acciones("CALL `spi_citasupdate`('$clave','$estudio','$fecha_selec','$hora_inicio','$horafin','$estado');");
            
            echo $fila_afectada;  
            break;

}
?>