<?php
    //Tiempo de vida
    $tiempo_de_vida = 600;
    ini_set('session.gc_maxlifetime', $tiempo_de_vida);

    //Inicio sesion
    session_start();

    //Configurar variables
    $_SESSION["nombre"] = "Juan";
    $_SESSION["apellido"] = "Perez";

    echo "Nombre: ". $_SESSION["nombre"] . "Apellido: " . $_SESSION["apellido"];

    //Eliminar variable de sesion
    unset($_SESSION["nombre"]);

    //Eliminar todas las variables
    session_destroy();

    //echo "Nombre: ". $_SESSION["nombre"] ."Apellido: " . $_SESSION["apellido"];

    //Cookies
    $nombre = "Usuario";
    $valor = "Ernesto Perez";
    $tiempo = time() + (86400 * 30); //86400 = 1 dia
    //$ruta = "/" //ruta de la cookie
    
    setcookie($nombre, $valor, $tiempo);

    //mostrar cookie

    echo $_COOKIE[$nombre];

    //eliminar
    setcookie($nombre, "", time()-3600);

    //eliminar todas
    foreach($_COOKIE as $clave => $valor){
        setcookie($clave, "", time()-3600);
    }

?>