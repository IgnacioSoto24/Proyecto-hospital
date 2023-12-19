<?php
require_once('conexion.php');

$consulta = "SELECT count(id_usuario) AS existe FROM usuario WHERE id_usuario = 'id_usuario' LIMIT 1";
$consulta = $conexion->query($consulta);
$fila = mysqli_fetch_assoc($consulta);

if (empty($_POST['id_usuario']) || empty($_POST['nombre_usuario']) || empty($_POST['apellido_usuario']) || 
    empty($_POST['fecha_nacimiento_usuario']) || empty($_POST['direccion_usuario']) || empty($_POST['contraseña'])){
    header("Location: http://127.0.0.1/Proyecto_hospital/pagina_principal.php");
}
else if($fila['existe'] == 1){
  header("Location: http://127.0.0.1/Proyecto_hospital/pagina_principal.php");
}
else{
    $id = $_POST['id_usuario'];
    $nombre_usuario = $_POST['nombre_usuario'];
    $apellido_usuario = $_POST['apellido_usuario'];
    $fecha_nacimiento_usuario = $_POST['fecha_nacimiento_usuario'];
    $direccion_usuario = $_POST['direccion_usuario'];
    $contraseña = $_POST['contraseña'];
    $correo = $_POST['Correo'];

    $pass = password_hash($contraseña, PASSWORD_DEFAULT);
    $query = "INSERT INTO usuario (id_usuario, nombre_usuario, apellido_usuario, fecha_nacimiento_usuario, direccion_usuario, contraseña, Correo) 
    VALUES ('$id', '$nombre_usuario', '$apellido_usuario', '$fecha_nacimiento_usuario', '$direccion_usuario', '$contraseña', '$correo')";
    $resultado = $conexion->query($query);

    header("Location: http://127.0.0.1/Proyecto_hospital/pagina_principal.php");
}
?>