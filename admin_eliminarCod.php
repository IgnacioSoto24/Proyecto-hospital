<?php

include 'log.php';
require_once('conexion.php');

session_start(); 
$usu = $_SESSION['rut'];

$Rut=$_POST['Rut'];

$query = "DELETE FROM personal WHERE rut = '$Rut'";
$resultado = $conexion->query($query);
$logs = new Log("log.txt"); 
$logs->writeLine("Aviso ", "$usu eliminó a: $Rut");
$logs->close();
    
header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");