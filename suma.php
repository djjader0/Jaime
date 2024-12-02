<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Suma</title>
</head>
<body>
    <h1>Suma</h1>
    <form action="" method="post">
        Número 1: <input type="number" name="num1"><br>
        Número 2: <input type="number" name="num2"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $resultado = $num1 + $num2;

        echo "Resultado de la suma: " . $resultado . "<br>";
    }
    ?>
    <br><a href="index.php">Volver a la página principal</a>
</body>
</html>
