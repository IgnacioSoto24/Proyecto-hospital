<?php

session_start(); 
$Rut = $_SESSION['rut'];

require_once('conexion.php');

$consulta = "SELECT count(rut) AS existe FROM ficha WHERE rut = '$Rut' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);


if (empty($_POST['diagnostico'])){
    header("Location: http://127.0.0.1/Proyecto-hospital/medico_servicio.php");
}
else if($fila['existe'] = 1){

    $query = "DELETE FROM ficha WHERE rut = '$Rut'";
    $resultado = $conexion->query($query);
    $diagnostico=$_POST['medicamento'];

    $query = "INSERT INTO ficha (diagnostico)
    VALUES ('$diagnostico')";
    $resultado = $conexion->query($query);

    header("Location: http://127.0.0.1/Proyecto-hospital/medico_servicio.php");

}
else{
    $diagnostico=$_POST['diagnostico'];

    $query = "INSERT INTO ficha (diagnostico)
    VALUES ('$diagnostico')";
    $resultado = $conexion->query($query);
    
     header("Location: http://127.0.0.1/Proyecto-hospital/medico_servicio.php");
}
?>