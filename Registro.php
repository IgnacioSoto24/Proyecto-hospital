<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Salud Plus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="#" class="d-inline-flex link-body-emphasis text-decoration-none">
        <div class="col-6 mb-2"><img src="img/hospital.png" width="150px" height="95px"></div>
        </a>
      </div>
      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="pagina_principal.php" class="nav-link px-2">Inicio</a></li>
        <li><a href="#" class="nav-link px-2">Features</a></li>
        <li><a href="#" class="nav-link px-2">Pricing</a></li>
        <li><a href="#" class="nav-link px-2">FAQs</a></li>
        <li><a href="#" class="nav-link px-2">About</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <a class="btn btn-primary" href="Inicio_sesion.php" role="button">Ingresar</a>
        <a class="btn btn-primary" href="#" role="button">Registrarse</a>
      </div>
</header>
<div class="row" style="height: 850px; background-color: #FFFFFF">
        <div class="col mt-4 d-flex justify-content-center">
            <div class="Inicio">
                <div class="row border rounded" style="height: 850px; background-color: #BA181B">
                    <div class="col-12 mt-2 d-flex justify-content-center"><FONT COLOR="#FFFFFF">Registrarse </FONT></div>
                    <div class="col mt-2 mb-2 d-flex justify-content-center">
                        <form action="registro_cod.php" method="POST">
                            <label"><FONT COLOR="#FFFFFF"> Rut: </FONT></label>
                            <input type="text" class="form-control" maxlength="11" name="id_usuario" id="id_usuario" placeholder="12345678-k" pattern="[0-9]+[-][1-9-k]" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Nombre: </FONT></label>
                            <input type="text" class="form-control" name="nombre_usuario" id="nombre_usuario" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Apellido: </FONT></label>
                            <input type="text" class="form-control" name="apellido_usuario" id="apellido_usuario" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Fecha de nacimiento: </FONT></label>
                            <input type="date" class="form-control" name="fecha_nacimiento_usuario" id="fecha_nacimiento_usuario" min="1900-01-01" max="2016-01-01" required> 
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Ciudad de residencia: </FONT></label>
                            <input type="text" class="form-control" name="direccion_usuario" id="direccion_usuario" required/>
                            <br><br>
                            <label"><FONT COLOR="#FFFFFF"> Correo </FONT></label>
                            <input type="email" class="form-control" name="correo" id="correo" required/>
                            <br><br>
                            <label for="Contraseña"><FONT COLOR="#FFFFFF"> Contraseña: </FONT></label>
                            <input type="password" class="form-control" name="contraseña" id="contraseña" required>
                            <br>
                            <button type="submit" class="btn btn-secondary">Registrarse</button>
                            <a href = "Inicio_sesion.php"><button type="button" class="btn btn-secondary">Volver</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="container">
<footer class="py-3 my-4">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li>
    <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li>
  </ul>
<p class="text-center text-body-secondary">&copy; 2023 Company, Inc</p>
</footer>
</div>
</body>
</html>
