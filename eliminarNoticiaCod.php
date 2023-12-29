<?php
include 'log.php';
require_once('conexion.php');

session_start(); 
$Rut = $_SESSION['rut'];

$Eliminar=$_POST['Eliminar'];

if($Eliminar > 0 || $Eliminar != null){
    $query = "DELETE FROM noticia WHERE id = $Eliminar";
    $resultado = $conexion->query($query);
    $logs = new Log("log.txt"); 
    $logs->writeLine("Aviso", " $Rut eliminó Noticia: $Eliminar");
    $logs->close();

    header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");
}
else{
    header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");
}

?>