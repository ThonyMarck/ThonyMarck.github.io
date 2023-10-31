<!DOCTYPE html>

<html>
  <head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="paquete.css" type="text/css">
  </head>

  <body>

    <!--Logo-->
    <div>
        <img class="logo" src="logomomentos.jpeg">
    </div>

    <div class="divpaquete">
        <h1 class="paquete">PAQUETES</h1>
    </div>
    
    <?php
// Conecta a la base de datos MySQL (ajusta los valores según tu configuración)
$conexion = mysqli_connect("localhost", "root", "", "momentos");

// Verifica si la conexión fue exitosa
if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Realiza una consulta para seleccionar los datos de la tabla
//$sql = "SELECT * FROM paquetes WHERE nombre LIKE '%boda%'";
$sql = "SELECT * FROM paquetes";
$resultado = mysqli_query($conexion, $sql);

// Muestra los datos en una tabla HTML

echo "<table border='1' class='tabla' >";
echo "<tr style='color:white'>";
echo "<td class='id' align='center'>idpaquete</td>";
echo "<td class='id' align='center'>nombre</td>";
echo "<td class='id' align='center'>fotografia</td>";
echo "<td class='id' align='center'>video</td>";
echo "<td class='id' align='center'>usb</td>";
echo "<td class='id' align='center'>total</td>";
echo "<td class='id'  colspan='2'>Acciones</td>";
echo "</tr>";

while ($fila = mysqli_fetch_assoc($resultado)) {
    
    echo "<tr style='color:white'>";
    echo "<td class='id' >{$fila['idpaquete']}</td>";
    echo "<td class='id' >{$fila['nombre']}</td>";
    echo "<td class='id' >{$fila['fotografia']}</td>";
    echo "<td class='id' >{$fila['video']}</td>";
    echo "<td class='id' >{$fila['usb']}</td>";
    echo "<td class='id' >{$fila['total']}</td>";
    // Agrega botones de editar y eliminar para cada fila
    echo "<td><a class='acciones' href='editar.php?idpaquete={$fila['idpaquete']}'>Editar</a></td>";
    echo "<td><a class='acciones' href='eliminar.php?idpaquete={$fila['idpaquete']}'>Eliminar</a></td>";
    echo "</tr>";
}

echo "</table>";

  // Cierra la conexión a la base de datos
  mysqli_close($conexion);
  ?>

  <div class="container">
   <a class='Agregar' href='agregar.php'> Agregar </a>;
   <a class='reg' href='index.html'> Regresar </a>;
    </div>


  </body>

</html>


