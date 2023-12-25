<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<?php
  include_once("header.php");
?>
<!-- Registro -->
<div class="row" style="height: 1050px; background-color: #FFFFFF">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="Inicio">
                <div class="row border rounded" style="height: 1000px; background-color: #BA181B">
                    <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Registrarse </FONT></div>
                    <div class="col mt-2 mb-2 d-flex justify-content-center">
                        <form action="registrarCod.php" method="POST">
                            <label"><FONT COLOR="#FFFFFF"> Nombres: </FONT></label>
                            <input type="text" class="form-control" name="Nombres" id="Nombres" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Apellido Paterno: </FONT></label>
                            <input type="text" class="form-control" name="Apellido1" id="Apellido1" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Apellido Materno: </FONT></label>
                            <input type="text" class="form-control" name="Apellido2" id="Apellido2" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Fecha de nacimiento: </FONT></label>
                            <input type="date" class="form-control" name="Fecha" id="Fecha" min="1900-01-01" max="2016-01-01" required> 
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Ciudad de residencia: </FONT></label>
                            <input type="text" class="form-control" name="Ciudad" id="Ciudad" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Correo </FONT></label>
                            <input type="email" class="form-control" name="Correo" id="Correo" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                            <input type="text" class="form-control" maxlength="11" name="Rut" id="Rut" placeholder="12345678-k" pattern="[0-9]+[-][1-9-k]" required/>
                            <br><br>
                            <label for="Contraseña"><FONT COLOR="#FFFFFF"> Contraseña: </FONT></label>
                            <input type="password" class="form-control" name="Contraseña" id="Contraseña" required>
                            <br>
                            <button type="submit" class="btn btn-secondary">Registrarse</button>
                            <a href = "Inicio_sesion.php"><button type="button" class="btn btn-secondary">Volver</button></a>
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