<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Desencriptar Mensaje</title>
</head>
<body>
    <h1>Desencriptar Mensaje</h1>
    <form action="" method="post">
        Mensaje Encriptado: <input type="text" name="mensaje_encriptado"><br>
        <button type="submit">Desencriptar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $mensajeencriptado = $_POST['mensaje_encriptado'];
        $mensajedesencriptado = base64_decode($mensajeencriptado);

        echo "Mensaje Desencriptado: " . $mensajedesencriptado . "<br>";
    }
    ?>
    <br><a href="index.html">Volver a la página principal</a>
</body>
</html>
