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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--Consultas-->
    <?php 
        require_once('conexion.php');
        
        //Cantidad usuarios
        $consultaUsuarios = "SELECT count(rut) AS cantidad FROM usuario";
        $consultaUsuarios = $conexion->query($consultaUsuarios);
        $fila = mysqli_fetch_assoc($consultaUsuarios);
        //Grafico de torta
        $consultaPersonal = "SELECT cargo, count(rut) AS cantidad FROM personal GROUP BY cargo";
        $consultaPersonal= mysqli_query($conexion, $consultaPersonal);

        //Grafico de barras
        $jovenUsuarios = "SELECT count(rut) AS cantidad FROM usuario WHERE fechaNacim >= '2005/01/01'";
        $jovenUsuarios = $conexion->query($jovenUsuarios);
        $fila1 = mysqli_fetch_assoc($jovenUsuarios);
        $adultoUsuarios = "SELECT count(rut) AS cantidad FROM usuario WHERE fechaNacim < '2005/01/01' AND fechaNacim > '1961/01/01'";
        $adultoUsuarios = $conexion->query($adultoUsuarios);
        $fila2 = mysqli_fetch_assoc($adultoUsuarios);
        $adultoMayorUsuarios = "SELECT count(rut) AS cantidad FROM usuario WHERE fechaNacim <= '1961/01/01'";
        $adultoMayorUsuarios = $conexion->query($adultoMayorUsuarios);
        $fila3 = mysqli_fetch_assoc($adultoMayorUsuarios);
    ?>
    
    <!--Grafico de Torta-->
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['cargo', 'cantidad'],
            <?php
                while ($row = mysqli_fetch_array($consultaPersonal)) {
                    echo "['" . $row["cargo"] . "', " . $row["cantidad"] . "],";
                }
            ?>
        ]);

        var options = {
          title: 'Cantidades de roles otorgados'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        }
    </script>

    <!--Grafico de Tabla-->
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Vida', 'Cantidad', { role: 'style' }],
            ['Joven', <?php echo $fila1['cantidad'] ?>, 'red'],            
            ['Adulto', <?php echo $fila2['cantidad'] ?>, 'blue'],            
            ['Adulto mayor', <?php echo $fila3['cantidad'] ?>, 'green'],
        ]);

        var options = {'title':'Edad usuarios',
            'width':600,
            'height':300};
        var chart = new google.visualization.ColumnChart(document.getElementById("chart_div"));
        chart.draw(data, options);
        }
    </script>
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
    <!--Fila de los Graficos-->
    <div class="row" style="height: 400px; background-color: #FFFFFF">
        <div class="col-8 d-flex justify-content-center" style="height: 300px; background-color: #FFFFFF">
            <div id="chart_div"></div>
        </div>
        <div class="col-4" style="height: 300px">
            <div id="piechart" style="width: 400px; height: 300px;"></div>
        </div>
    </div>
<?php
  include_once("footer.php");
?>
</body>
</html>