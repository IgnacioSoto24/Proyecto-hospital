<?php
require_once('conexion.php');

$consulta = "SELECT count(rut) AS existe FROM usuario WHERE rut = '$Rut' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);

if (empty($_POST['Nombres']) || empty($_POST['Apellido1']) || empty($_POST['Apellido2']) || empty($_POST['Ciudad']) || 
    empty($_POST['Correo']) || empty($_POST['Rut']) || empty($_POST['Contraseña'])){
    header("Location: http://127.0.0.1/Proyecto-hospital/Registro.php");
}
else if($fila['existe'] == 1){
  header("Location: http://127.0.0.1/Proyecto-hospital/Registro.php");
}
else{
  $Nombres=$_POST['Nombres'];
  $Apellido1=$_POST['Apellido1'];
  $Apellido2=$_POST['Apellido2'];
  $Fecha=$_POST['Fecha'];
  $Ciudad=$_POST['Ciudad'];
  $Correo=$_POST['Correo'];
  $Rut=$_POST['Rut'];
  $Contraseña=$_POST['Contraseña'];

  $pass = password_hash($Contraseña, PASSWORD_DEFAULT);
  $query = "INSERT INTO usuario (nombres, apellido1, apellido2, fechaNacim, ciudadResid, correo, rut, contraseña)
  VALUES ('$Nombres', '$Apellido1', '$Apellido2', '$Fecha', '$Ciudad', '$Correo', '$Rut', '$pass')";
  $resultado = $conexion->query($query);

  header("Location: http://127.0.0.1/Proyecto-hospital/Inicio_sesion.php");
}
?>