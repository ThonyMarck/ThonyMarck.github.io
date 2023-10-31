<!DOCTYPE html>
<html>
<head>
    <title>Iniciar sesion</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="login.css" type="text/css">
</head>
<body>

   <!--Logo-->
   <div>
    <img class="logo" src="logomomentos.jpeg">
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Comprueba si las credenciales son válidas
    if ($username === "CRANTON" && $password === "MACKS") {
        header("Location: paquetes.php");
    } else {
        echo "<h1 class='msj'>Nombre de usuario o contraseña incorrectos.</h1>";
    }

    echo "<a href='login.html' > Regresar </a>";
}
?>

</body>
</html>


