<?php
include 'log.php';
require_once('conexion.php');

if (empty($_POST['Rut']) || empty($_POST['Contraseña']))
{
  header("Location: http://127.0.0.1/Proyecto-hospital/Inicio_sesion.php");
}
else
{
  $Rut=$_POST['Rut'];
  $Contraseña=$_POST['Contraseña'];

  $sql = "SELECT contraseña FROM usuario WHERE rut = '$Rut' LIMIT 1";
  $resultado = $conexion->query($sql);
  $fila = mysqli_fetch_assoc($resultado);

  if(password_verify($Contraseña, $fila['contraseña'])){
    session_start();
    $_SESSION['rut'] = $Rut;
    
    header("Location: http://127.0.0.1/Proyecto-hospital/usuario_menu.php");

  }else{
    $sql = "SELECT contraseña, cargo FROM personal WHERE rut = '$Rut' LIMIT 1";
    $resultado = $conexion->query($sql);
    $fila = mysqli_fetch_assoc($resultado);

    if(password_verify($Contraseña, $fila['contraseña'])){
      if($fila['cargo'] == 'Administrador' || $fila['cargo'] == 'Periodista'){
        session_start();
        $_SESSION['rut'] = $Rut;
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", 'Inicio sesion '.$fila['cargo']." con el rut: $Rut");
        $logs->close();
        header("Location: http://127.0.0.1/Proyecto-hospital/admin_menu.php");
      }else{
        session_start();
        $_SESSION['rut'] = $Rut;
        $logs = new Log("log.txt"); 
        $logs->writeLine("Aviso", 'Inicio sesion '.$fila['cargo']." con el rut: $Rut");
        $logs->close();
        header("Location: http://127.0.0.1/Proyecto-hospital/medico_menu.php");
      }
    }else{
      header("Location: http://127.0.0.1/Proyecto-hospital/Inicio_sesion.php");
    }
  }
}
?>