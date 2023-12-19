<?php

require_once('Conexion.php');

if (empty($_POST['Correo'])){
    header("Location: http://127.0.0.1/Proyecto_hospital/pagina_principal.php");
}
else{
  $correo=$_POST['Correo'];
  
  $consulta = "SELECT COUNT(id_usuario) AS existe FROM usuario WHERE Correo='$correo' LIMIT 1";
  $cont = mysqli_query($conexion, $consulta);
  while ($row = mysqli_fetch_array($cont)){
    if($row["existe"] == 1){
        header("Location: http://127.0.0.1/Proyecto_hospital/pagina_principal.php");
    }
    else{
        header("Location: http://127.0.0.1/Proyecto_hospital/pagina_principal.php");
    }
  }
}
?>