<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Encriptar Mensaje</title>
</head>
<body>
    <h1>Encriptar Mensaje</h1>
    <form action="" method="post">
        Mensaje: <input type="text" name="mensaje"><br>
        <button type="submit">Encriptar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mensaje = $_POST['mensaje'];
        $mensajeencriptado = base64_encode($mensaje);

        echo "Mensaje Encriptado: " . $mensajeencriptado . "<br>";
    }
    ?>
    <br><a href="index.php">Volver a la página principal</a>
</body>
</html>
