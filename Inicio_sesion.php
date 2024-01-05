<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<?php
  include_once("header.php");
?>

<div class="row" style="height: 400px; background-color: #FFFFFF">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="Inicio">
                <div class="row border rounded" style="height: 350px; background-color: #BA181B">
                    <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Inicio sesión </FONT></div>
                    <div class="col mt-2 d-flex justify-content-center">
                        <form action="inicio_sesionCod.php" method="POST">
                            <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                            <input type="text" class="form-control" name="Rut" maxlength="11" id="Rut" placeholder="12345678-k"/>
                            <br><br>
                            <label for="Contraseña"><FONT COLOR="#FFFFFF"> Contraseña: </FONT></label>
                            <input type="password" class="form-control" name="Contraseña" id="Contraseña">
                            <a href = "recuperar.php"><FONT COLOR="#FFFFFF"> Olvido su contrasena?</FONT></a>
                            <br>
                            <button type="submit" class="btn btn-secondary">Iniciar sesión</button>
                            <a href = "Registro.php"><button type="button" class="btn btn-secondary">Registrarse</button></a>
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