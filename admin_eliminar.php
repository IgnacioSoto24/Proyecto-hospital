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
        <li><a href="admin_menu.php" class="nav-link px-2">Inicio</a></li>
        <li><a class="nav-link" href="admin_estadisticas.php">Estadisticas</a></li>
        <li><a class="nav-link" href="admin_registro.php">Registrar personal</a></li>
        <li><a class="nav-link" href="admin_eliminar.php">Eliminar personal</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <a class="btn btn-primary" href="cerrar_sesion.php" role="button">Cerrar sesión</a>
      </div>
    </header>
<div class="row" style="height: 750px; background-color: #FFFFFF">
    <div class="col mt-4 d-flex justify-content-center">
        <div class="Inicio">
            <div class="row border rounded" style="height: 200px; background-color: #BA181B">
                <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF"> Eliminar Personal </FONT></div>
                <div class="col mt-2 mb-2 d-flex justify-content-center">
                    <form action="admin_eliminarCod.php" method="POST">
                        <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                        <input type="text" class="form-control" name="Rut" id="Rut" placeholder="11111111-1"/>
                        <button type="submit" class="btn btn-secondary">Eliminar</button>
                        <a href = "admin_menu.php"><button type="button" class="btn btn-secondary">Volver</button></a>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>