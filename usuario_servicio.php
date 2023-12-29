<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container-fluid" style="background-color: #D3D3D3">
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
<div class="row" style="height: 350px; background-color: #FFFFFF">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="Servicios">
                <div class="row" style="height: 300px; background-color: #fff">
                    <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#0d6efd"><H4>Servicios Disponibles</H4></FONT></div>
                    <div class="col mt-2 d-flex justify-content-center">
                        <form action="inicio_sesionCod.php" method="POST">
                            <div class="btn-group btn-group-lg" role="group" aria-label="Large button group">
                                <a class="btn btn-primary" href="ficha.php" role="button">Ingresar datos para ficha medica</a>
                                <a class="btn btn-primary" href="PDF.php" role="button">Generar PDF</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
  include_once("footer.php");
?>
</body>
</html>