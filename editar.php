<!DOCTYPE html>
<html>
<head>
    <title>Editar Paquete</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="editar.css" type="text/css">
</head>
<body>

   <!--Logo-->
    <div>
        <img class="logo" src="logomomentos.jpeg">
    </div>


    <h1 class="agg">Editar Paquete</h1>
    
    <div class="main">
    <?php
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['idpaquete'])) {
    $id = $_GET['idpaquete'];
    
    // Conecta a la base de datos
    $conexion = mysqli_connect("localhost", "root", "", "momentos");

    // Verificar la conexión
    if (!$conexion) {
        die("Error al conectar a la base de datos: " . mysqli_connect_error());
    }

    // Consulta SQL para obtener los datos del registro a editar
    $sql = "SELECT * FROM paquetes WHERE idpaquete = $id";
    $resultado = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($resultado) > 0) {
        $fila = mysqli_fetch_assoc($resultado);
        // Mostrar un formulario para editar los datos
        echo "<form method='POST' action='actualizar.php' style='color:white'>";
        echo "<p class='input'>Nombre:</p> <input class='entrada' type='text' name='nombre' value='" . $fila['nombre'] . "'><br>";
        echo "<p class='input'>Fotografía:</p> <input class='entrada' type='text' name='fotografia' value='" . $fila['fotografia'] . "'><br>";
        echo "<p class='input'>Video:</p> <input class='entrada' type='text' name='video' value='" . $fila['video'] . "'><br>";
        echo "<p class='input'>Usb:</p> <input class='entrada' type='text' name='usb' value='" . $fila['usb'] . "'><br>";
        echo "<p class='input'>Total:</p> <input class='entrada' type='text' name='total' value='" . $fila['total'] . "'><br>";
        echo "<input type='hidden' name='idpaquete' value='$id'>";
        echo "<input class='actualizar' type='submit' value='Actualizar'>";
        echo "</form>";
    } else {
        echo "No se encontraron datos para editar.";
    }

    // Cerrar la conexión
    mysqli_close($conexion);
}
?>
   <div class="divregresar">
     <a href="paquetes.php" class="reg">Regresar</a>
    </div>

   </div>
</body>
</html>