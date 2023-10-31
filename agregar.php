<!DOCTYPE html>
<html>
<head>
    <title>Agregar Paquete</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="agregar.css" type="text/css">
</head>
<body>

  <!--Logo-->
  <div>
        <img class="logo" src="logomomentos.jpeg">
    </div>

    <h1 class="agg">Agregar Paquete</h1>

    <div class="main">

    <form action="agregar.php" method="post">
        <input class="input" type="text" name="idpaquete" placeholder="ID Paquete">
        <input class="input" type="text" name="nombre" placeholder="Nombre">
        <input class="input" type="text" name="fotografia" placeholder="Fotografía">
        <input class="input" type="text" name="video" placeholder="Video">
        <input class="input" type="text" name="usb" placeholder="USB">
        <input class="input" type="text" name="total" placeholder="Total">
        <input class="agregar" type="submit" value="Agregar">
    </form>

    </div>

    
 <?php
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $idpaquete = $_POST["idpaquete"];
    echo "IdPaquete: $idpaquete";

    $nombre = $_POST["nombre"];
    echo "Nombre: $nombre";

    $fotografia = $_POST["fotografia"];
    echo "Fotografia: $fotografia";

    $video = $_POST["video"];
    echo "Video: $video";

    $usb = $_POST["usb"];
    echo "Usb: $usb";

    $total = $_POST["total"];
    echo "Total: $total";


    // Conecta a la base de datos MySQL (ajusta los valores según tu configuración)
    $conexion = mysqli_connect("localhost", "root", "", "momentos");

    // Verifica si la conexión fue exitosa
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Inserta el nombre en la base de datos
    $sql = "INSERT INTO paquetes (idpaquete,nombre,fotografia,video,usb,total) VALUES ('$idpaquete','$nombre','$fotografia','$video','$usb','$total')";

    if (mysqli_query($conexion, $sql)) {
        echo "<p class='msj'>Paquete agregado a la base de datos</p>";
    } else {
        echo "Error al agregar el paquete: " . mysqli_error($conexion);
    }

    // Cierra la conexión a la base de datos
    mysqli_close($conexion);

  } ?>


   <div class="divi">
   <a href="paquetes.php" class="reg">Regresar</a>
   </div>

 

</body>
</html>