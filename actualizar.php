<!DOCTYPE html>
<html>
<head>
    <title>Agregar Paquete</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="actualizar.css" type="text/css">
</head>
<body>

  <!--Logo-->
  <div>
        <img class="logo" src="logomomentos.jpeg">
    </div>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['idpaquete'])) {
    $id = $_POST['idpaquete'];
    $nombre = $_POST['nombre'];
    $fotografia = $_POST['fotografia'];
    $video = $_POST['video'];
    $usb = $_POST['usb'];
    $total = $_POST['total'];

    // Conecta a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "momentos");

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Consulta SQL para actualizar los datos
    $sql = "UPDATE paquetes SET nombre = '$nombre', fotografia = '$fotografia', video = '$video', usb = '$usb', total = '$total' WHERE idpaquete = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "<h1 class='msj' style='color:white'>Datos actualizados con éxito</h1>";
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>
<a href="paquetes.php" class="regre">Regresar</a>



</body>
</html>













