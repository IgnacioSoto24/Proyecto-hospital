<?php
include 'log.php';
require_once('conexion.php');
        
//Cantidad de noticias
$consultaNoticias = "SELECT count(id) AS cantidad FROM noticia";
$consultaNoticias = $conexion->query($consultaNoticias);
$fila = mysqli_fetch_assoc($consultaNoticias);

$consultaNoticias2 = "SELECT MIN(id) AS minimo FROM noticia";
$consultaNoticias2 = $conexion->query($consultaNoticias2);
$fila2 = mysqli_fetch_assoc($consultaNoticias2);
$Minimo = $fila2['minimo'];

session_start(); 
$Rut = $_SESSION['rut'];

if (empty($_POST['Titulo']) || empty($_POST['Cuerpo']) || empty($_POST['imagen']) || empty($_POST['Autor'])){
    header("Location: http://127.0.0.1/Proyecto-hospital/agregar_noticia.php");
    
}
else{
    if($fila['cantidad']<= 5){
        $Titulo=$_POST['Titulo'];
        $Cuerpo=$_POST['Cuerpo'];
        $Categoria=$_POST['Categoria'];
        $Img=$_POST['imagen'];
        $Autor=$_POST['Autor'];

        $query = "INSERT INTO noticia (titulo, cuerpo, categoria, imagen, autor)
        VALUES ('$Titulo', '$Cuerpo', '$Categoria', '$Img', '$Autor')";
        $resultado = $conexion->query($query);
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", " Agregó Noticia: , $Rut");
        $logs->close();

        header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");
    }
    else{

        $query = "DELETE FROM noticia WHERE id = $Minimo";
        $resultado = $conexion->query($query);

        $Titulo=$_POST['Titulo'];
        $Cuerpo=$_POST['Cuerpo'];
        $Categoria=$_POST['Categoria'];
        $Img=$_POST['imagen'];
        $Autor=$_POST['Autor'];

        $query = "INSERT INTO noticia (titulo, cuerpo, categoria, imagen, autor)
        VALUES ('$Titulo', '$Cuerpo', '$Categoria', '$Img', '$Autor')";
        $resultado = $conexion->query($query);
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", "$Rut Agregó Noticia y Se eliminó Noticia: $Minimo");
        $logs->close();
        
        header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");

    }
}