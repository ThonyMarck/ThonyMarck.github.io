<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Paquete</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="eliminar.css" type="text/css">
</head>
<body>

 <!--Logo-->
    <div>
        <img class="logo" src="logomomentos.jpeg">
    </div>

    <h1>Eliminar Paquete</h1>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idpaquete'])) {
    $id = $_GET['idpaquete'];

    // Conecta a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "momentos");

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Consulta SQL para eliminar el registro
    $sql = "DELETE FROM paquetes WHERE idpaquete = $id";

    if (mysqli_query($conexion, $sql)) {
        echo "<h1 class='msj'>Registro eliminado con éxito</h1>";
    } else {
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>

<a href="paquetes.php" class="regre">Regresar</a>
</body>
</html>

