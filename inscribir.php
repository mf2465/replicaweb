<?php 
$nombreUsuario = $_GET["nombre"];
$apellidoUsuario = $_GET['apellido'];
$emailUsuario = $_GET['email'];
$comentariosUsuario = $_GET['comentarios'];
date_default_timezone_set("America/Argentina/Buenos_Aires");
$fechaAltaUsuario = date("d-m-Y h:i:s");


echo "Datos del ORADOR";
echo "<br>";
echo "<br>";
echo "Nombre = ".$_GET["nombre"];
echo "<br>";
echo "Apellido = ".$_GET['apellido'];
echo "<br>";
echo "Email = ".$_GET['email'];
echo "<br>";
echo "Comentarios = ".$_GET['comentarios'];
echo "<br>";
echo "<br>";
echo "<pre>";
echo var_dump($_GET);
echo "</pre>";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Inscripciones</title>
  </head>
  <body>
    <h1>Inscripciones</h1>

    <div class="card" style="width: 18rem;">
    <div class="card-body">
    <h5 class="card-title"><?php echo $nombreUsuario." ". $apellidoUsuario ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo $emailUsuario . " - ". $fechaAltaUsuario ?></h6>
    <p class="card-text"><?php echo $comentariosUsuario?></p>
    <a href="#" class="card-link">confirmar</a>
    <a href="#" class="card-link">regresar</a>
    </div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
