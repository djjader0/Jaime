<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculos</title>
</head>
<body>
    <h1>Calculos</h1>
    <form action="" method="post">
        Valor 1: <input type="number" name="valor1"><br>
        Valor 2: <input type="number" name="valor2"><br>
        Valor 3: <input type="number" name="valor3"><br>
        Valor 4: <input type="number" name="valor4"><br>
        Valor 5: <input type="number" name="valor5"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valores = [$_POST['valor1'], $_POST['valor2'], $_POST['valor3'], $_POST['valor4'], $_POST['valor5']];


        $media = sum($valores) / count($valores);

        $valorescount = count_valores($valores);
        $moda = moda1 (max($valorescount), $valorescount);

        sort($valores);
        $mitad = count($valores) / 2;
        if (count($valores) % 2 == 0) {
            $mediana = ($valores[$mitad - 1] + $valores[$mitad]) / 2;
        } else {
            $mediana = $valores[count2($mitad)];
        }

        echo "Media: " . $media . "<br>";
        echo "Moda: " . $moda . "<br>";
        echo "Mediana: " . $mediana . "<br>";
    }
    ?>
    <br><a href="index.php">Volver a la página principal</a>
</body>
</html>
