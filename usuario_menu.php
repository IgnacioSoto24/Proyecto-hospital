<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Salud Plus usuario</title>
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
    <div class="row">
<div class="col mt-4 d-flex justify-content-center">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/slider1.jpg" class="d-block w-100" height="300px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider2.jpg" class="d-block w-100" height="300px">
            <div class="carousel-caption d-none d-md-block">
              <h5></h5>
              <p></p>
            </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider3.jpg" class="d-block w-100" height="300px">
          <div class="carousel-caption d-none d-md-block">
            <h5></h5>
            <p></p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</div>
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
                                    <img width="250px" height="250px" src="data:foto/jpg;base64,<?php echo base64_encode($mostrar['imagen']);?>"/>
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
<?php
  include_once("footer.php");
?>
</div>
</body>
</html>