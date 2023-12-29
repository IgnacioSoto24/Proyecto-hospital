<?php

include 'log.php';
require_once('conexion.php');

session_start(); 
$usu = $_SESSION['rut'];

if (empty($_POST['Nombres']) || empty($_POST['Apellido1']) || empty($_POST['Apellido2']) || empty($_POST['Contraseña']) || empty($_POST['Rut'])){
    header("Location: http://127.0.0.1/Proyecto-hospital/admin_registro.php");
}
else{
    $Nombres=$_POST['Nombres'];
    $Apellido1=$_POST['Apellido1'];
    $Apellido2=$_POST['Apellido2'];
    $Cargo=$_POST['Cargo'];
    $Contraseña=$_POST['Contraseña'];
    $Rut=$_POST['Rut'];
    

    $pass = password_hash($Contraseña, PASSWORD_DEFAULT);
    $query = "INSERT INTO personal (nombres, apellido1, apellido2, cargo, contraseña, rut)
    VALUES ('$Nombres', '$Apellido1', '$Apellido2', '$Cargo', '$pass', '$Rut')";
    $resultado = $conexion->query($query);
    $logs = new Log("log.txt"); 
    $logs->writeLine("Aviso", "$usu Registro a: $Rut con cargo de $Cargo");
    $logs->close();
    
    header("Location: http://127.0.0.1/Proyecto-hospital/admin_estadisticas.php");
}