<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
        <div class="col-6 mb-2"><img src="img/logohospital.png" width="150px" height="100px"></div>
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="usuario_menu.php" class="nav-link px-2">Inicio</a></li>
        <li><a class="nav-link" href="usuario_perfil.php">Ver perfil</a></li>
        <li><a class="nav-link" href="usuario_servicio.php">Servicios</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <a class="btn btn-primary" href="cerrar_sesion.php" role="button">Cerrar sesión</a>
      </div>
    </header>
    <div class="row" style="background-color: #FFFFFF">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col">
                    <?php
                        require_once('conexion.php');
                    
                        ?>   
                        <table class="table table-bordered">
                            <?php

                            require_once('conexion.php');

                            session_start(); 
                            $Rut = $_SESSION['rut'];

                            $sql="SELECT * FROM usuario WHERE rut = '$Rut'";
                            $result=mysqli_query($conexion, $sql);

                            while($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <div class="row">
                                <div class="col-10 mt-4">
                                    <td>Nombre completo:
                                    <h6><?php echo $mostrar['nombres']?></h6></td>
                                    <td>Apellido paterno:
                                    <h6><?php echo $mostrar['apellido1']?></h6></td>
                                    <td>Apellido materno:
                                    <h6><?php echo $mostrar['apellido2']?></h6></td>
                                    <td>Fecha de nacimiento:
                                    <h6><?php echo $mostrar['fechaNacim']?></h6></td>
                                    <td>Ciudad de residensia:
                                    <h6><?php echo $mostrar['ciudadResid']?></h6></td>
                                    <td>Correo:
                                    <h6><?php echo $mostrar['correo']?></h6></td>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <div class="col-11"></div>
            </div>
        </div>
    </div>
<?php
  include_once("footer.php");
?>
</body>
</html>