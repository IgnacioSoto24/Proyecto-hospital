<?php

session_start(); 
$Rut = $_SESSION['rut'];

require_once('conexion.php');

$consulta = "SELECT count(rut) AS existe FROM ficha WHERE rut = '$Rut' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);


if (empty($_POST['antecedentes']) || empty($_POST['alergias']) || empty($_POST['enfermedadesCroni']) || empty($_POST['medicamento'])){
    header("Location: http://127.0.0.1/Proyecto-hospital/ficha.php");
}
else if($fila['existe'] = 1){

    $query = "DELETE FROM ficha WHERE rut = '$Rut'";
    $resultado = $conexion->query($query);

    $AntEnfer=$_POST['antecedentes'];
    $Alergias=$_POST['alergias'];
    $EnferCroni=$_POST['enfermedadesCroni'];
    $MediActu=$_POST['medicamento'];

    $query = "INSERT INTO ficha (rut, antecedentes, alergias, enfermedadesCroni, medicamento)
    VALUES ('$Rut', '$AntEnfer', '$Alergias', '$EnferCroni', '$MediActu')";
    $resultado = $conexion->query($query);

    header("Location: http://127.0.0.1/Proyecto-hospital/usuario_servicio.php");

}
else{
    $AntEnfer=$_POST['antecedentes'];
    $Alergias=$_POST['alergias'];
    $EnferCroni=$_POST['enfermedadesCroni'];
    $MediActu=$_POST['medicamento'];

    $query = "INSERT INTO ficha (rut, antecedentes, alergias, enfermedadesCroni, medicamento)
    VALUES ('$Rut', '$AntEnfer', '$Alergias', '$EnferCroni', '$MediActu')";
    $resultado = $conexion->query($query);
    
     header("Location: http://127.0.0.1/Proyecto-hospital/usuario_servicio.php");
}
?>