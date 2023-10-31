<!DOCTYPE html>

<html>

  <head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Boda.css" type="text/css">
  </head>

  <body>

    <!--Encabezado Pagina-->
   <div>
        <nav>
            <ul>
             <li ><a  href="index.html">Inicio</a></li>
             <li ><a  href="Acerca de.html">Acerca de</a></li>
             <li ><a  href="Servicios.html">Servicios</a></li>
             <li ><a  href="Contacto.html">Contacto</a></li>
           </ul>
        </nav>
    </div>

    <!--Logo-->
    <div>
        <img class="logo" src="logomomentos.jpeg">
    </div>

    <h1 style="color: white">Lista de Paquetes</h1>

    <h2 style="color: white">Paquete 1</h2>
    
   <?php
     $servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
     $username = "root";
    $password = "";
    $database = "momentos";

    // Crear la conexión
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Query para recuperar datos de la tabla (cambia 'mi_tabla' por el nombre de tu tabla)
    $sql = "SELECT * FROM paquetes WHERE nombre = 'Boda 1'";
    $result = $conn->query($sql);

    // Crear una lista HTML para mostrar los datos
    echo "<ul>";

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<li style='color:white ; max-width: 60%;'>";
            echo "<p style='color:red; display: inline-block;'>Nombre: </p> " . $row["nombre"] . "<br>";
            echo "<br>";
            echo "<p style='color:red; style='display: inline-block; margin: 0;'>Fotografía: </p> " . $row["fotografia"]. "<br>";
            echo "<img  src='cuadropaquete1.png' class='cuadrouno'>";
            echo "<br>";
            echo "<p style='color:red;  style='display: inline-block; margin: 0;'>Video: </p> " . $row["video"]. "<br>";
            echo "<br>";
            echo "<p style='color:red; style='display: inline-block; margin: 0;'>USB: </p> " . $row["usb"]. "<br>";
            echo "<img src='usbuno.png'>";
            echo "<br>";
            echo "<p style='color:red; style='display: inline-block; margin: 0;'>Total: </p> " . $row["total"];
            echo "</li>";
        }
    } else {
        echo "0 resultados";
    }

    echo "</ul>";

        // Cerrar la conexión a la base de datos
        $conn->close();
    ?>

     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    <h2 style="color: white">Paquete 2</h2>



    <?php
        $servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
        $username = "root";
        $password = "";
        $database = "momentos";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Query para recuperar datos de la tabla (cambia 'mi_tabla' por el nombre de tu tabla)
        $sql = "SELECT * FROM paquetes WHERE nombre = 'Boda 2'";
        $result = $conn->query($sql);

        // Crear una lista HTML para mostrar los datos
        echo "<ul>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li style='color:white ; max-width: 60%;'>";
                echo "<p style='color:red; display: inline-block; margin: 0;'>Nombre: </p> " . $row["nombre"] . "<br>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Fotografía: </p> " . $row["fotografia"]. "<br>";
                echo "<img  src='cuadropaquete2.png' class='cuadrouno'>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Video: </p> " . $row["video"]. "<br>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>USB: </p> " . $row["usb"]. "<br>";
                echo "<img  src='usbuno.png' class='usbdos'>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Total: </p> " . $row["total"];
                echo "</li>";
            }
        } else {
            echo "0 resultados";
        }

        echo "</ul>";

        // Cerrar la conexión a la base de datos
        $conn->close();
    ?>

     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    <h2 style="color: white">Paquete 3</h2>

    <?php
        $servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
        $username = "root";
        $password = "";
        $database = "momentos";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Query para recuperar datos de la tabla (cambia 'mi_tabla' por el nombre de tu tabla)
        $sql = "SELECT * FROM paquetes WHERE nombre = 'Boda 3'";
        $result = $conn->query($sql);

        // Crear una lista HTML para mostrar los datos
        echo "<ul>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li style='color:white ; max-width: 60%;'>";
                echo "<p style='color:red; display: inline-block; margin: 0;'>Nombre: </p> " . $row["nombre"] . "<br>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Fotografía: </p> " . $row["fotografia"]. "<br>";
                echo "<img  src='cuadropaquete2.png'  class='cuadrouno'>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Video: </p> " . $row["video"]. "<br>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>USB: </p> " . $row["usb"]. "<br>";
                echo "<img  src='usbuno.png' class='usbdos'>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Total: </p> " . $row["total"];
                echo "</li>";
            }
        } else {
            echo "0 resultados";
        }

        echo "</ul>";

        // Cerrar la conexión a la base de datos
        $conn->close();
    ?>
    

    <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    <h2 style="color: white">Paquete 4</h2>

    <?php
        $servername = "localhost"; // Cambia esto si tu servidor MySQL no está en localhost
        $username = "root";
        $password = "";
        $database = "momentos";

        // Crear la conexión
        $conn = new mysqli($servername, $username, $password, $database);

        // Verificar la conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Query para recuperar datos de la tabla (cambia 'mi_tabla' por el nombre de tu tabla)
        $sql = "SELECT * FROM paquetes WHERE nombre = 'Boda 4'";
        $result = $conn->query($sql);

        // Crear una lista HTML para mostrar los datos
        echo "<ul>";

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li style='color:white ; max-width: 60%;'>";
                echo "<p style='color:red; display: inline-block; margin: 0;'>Nombre: </p> " . $row["nombre"] . "<br>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Fotografía: </p> " . $row["fotografia"]. "<br>";
                echo "<img  src='cuadropaquete2.png'  class='cuadrouno'>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Video: </p> " . $row["video"]. "<br>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>USB: </p> " . $row["usb"]. "<br>";
                echo "<img  src='usbuno.png' class='usbdos'>";
                echo "<br>";
                echo "<p style='color:red; style='display: inline-block; margin: 0;'>Total: </p> " . $row["total"];
                echo "</li>";
            }
        } else {
            echo "0 resultados";
        }

        echo "</ul>";

        // Cerrar la conexión a la base de datos
        $conn->close();
    ?>
    

    <br>
     <br>
     <br>
     <br>
     <br>
     <br>

       <!--Iconos Redes Sociales-->
       <div class="redes-sociales">
        <a href="https://www.facebook.com/MomentosFotosyvideo" target="_blank"><img  src="facebook.png" alt="Facebook"  class="face" ></a>
        <a href="https://www.instagram.com/momentos_fotoyvideo/" target="_blank"><img src="instagram.png" alt="Instagram" class="insta" ></a>
        <a href="https://wa.link/mg1jbu" target="_blank"><img src="whatsapp.png" alt="Instagram" class="wsp" ></a>
       </div>

  </body>

</html>

