<?php
include 'log.php';
require_once('conexion.php');

session_start(); 
$Rut = $_SESSION['rut'];


if (empty($_POST['id'])){
    header("Location: http://127.0.0.1/Proyecto-hospital/modificarNoticia.php");
    
}
else{

    $id=$_POST['id'];

    $consultaNoticias = "SELECT count(id) AS existe FROM noticia WHERE id = $id";
    $consultaNoticias = $conexion->query($consultaNoticias);
    $fila = mysqli_fetch_assoc($consultaNoticias);

    if($fila['existe'] == 1){
        $Titulo=$_POST['Titulo'];
        $Cuerpo=$_POST['Cuerpo'];
        $Categoria=$_POST['Categoria'];
        $Img=$_POST['imagen'];
        $Autor=$_POST['Autor'];

        $query = "DELETE FROM noticia WHERE id = $id";
        $resultado = $conexion->query($query);

        $query = "INSERT INTO noticia (id, titulo, cuerpo, categoria, imagen, autor)
        VALUES ('$id', '$Titulo', '$Cuerpo', '$Categoria', '$Img', '$Autor')";
        $resultado = $conexion->query($query);
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", " $Rut Modifico la noticia $id");
        $logs->close();

        header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");
    }
    else{     
        header("Location: http://127.0.0.1/Proyecto-hospital/agregar_noticia.php");

    }
}