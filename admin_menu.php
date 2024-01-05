<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Salud Plus admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
    <?php 
        require_once('conexion.php');
        
        //Cantidad de noticias
        $consultaNoticias = "SELECT count(id) AS cantidad FROM noticia";
        $consultaNoticias = $conexion->query($consultaNoticias);
        $fila = mysqli_fetch_assoc($consultaNoticias);

    ?>
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
        <li><a href="admin_menu.php" class="nav-link px-2">Inicio</a></li>
        <li><a class="nav-link" href="admin_estadisticas.php">Estadisticas</a></li>
        <li><a class="nav-link" href="admin_registro.php">Registrar personal</a></li>
        <li><a class="nav-link" href="admin_eliminar.php">Eliminar personal</a></li>
      </ul>
      <div class="col-md-3 text-end">
        <a class="btn btn-primary" href="cerrar_sesion.php" role="button">Cerrar sesión</a>
      </div>
    </header>
    <!--Herramientas noticia-->
    <div class="row" style="height: 300px; background-color: #FFFFFF">
        <div class="col-2 mt-2"> 
                <a href = "agregar_noticia.php">
                    <button type="button" class="btn btn-secondary">Agregar noticia</button>
                </a>
                <a href = "modificarNoticia.php">
                    <button type="button" class="btn btn-secondary">Modificar noticia</button>
                </a>
        </div>
      </div>

        <div class="col-2 mt-2">
            <form action="eliminarNoticiaCod.php" method="POST">
                <label"><FONT COLOR="#BA181">Escriba id para eliminar noticia: </FONT></label>
                <input type="number" class="form-control" name="Eliminar" id="Eliminar"/>
                <br>
                <button type="submit" class="btn btn-secondary">Eliminar noticia</button>
            </form>
        </div>
        <div class="col-6 mt-2"><H3>Cantidad de noticias almacenadas: <?php echo $fila['cantidad'] ?></H3></div>
        </div>
    <!--Fila Noticias-->
    <div class="row" style="background-color: #FFFFFF">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="col">
                    <?php
                        //Conexion con bd
                        require_once('conexion.php');
                    
                        ?>   
                        <table class="table table-bordered">
                            <?php
                            //Seleciono todo de la tabla noticia
                            $sql="SELECT * FROM noticia";
                            $result=mysqli_query($conexion, $sql);

                            //ordeno imprimir
                            while($mostrar=mysqli_fetch_array($result)){
                            ?>

                            <div class="row">
                                <div class="col-2 mt-2">
                                    <img width="250px" height="250px" src="data:img/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>"/>
                                </div>
                                <div class="col-10 mt-4">
                                    <h1><?php echo $mostrar['id']?></h1>
                                    <h2><?php echo $mostrar['titulo']?></h2>
                                    <h5><?php echo $mostrar['cuerpo']?></h5>
                                    <h6><?php echo $mostrar['categoria']?></h6>
                                    <h6><?php echo $mostrar['autor']?></h6>
                                </div>
                                <hr>
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
</div>

<?php
  include_once("footer.php");
?>
</div>
</body>
</html>

