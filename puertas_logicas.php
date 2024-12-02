<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Puertas Lógicas</title>
</head>
<body>
    <h1>Puertas Lógicas</h1>
    <form action="" method="post">
        Entrada A: <input type="text" name="entradaA"><br>
        Entrada B: <input type="text" name="entradaB"><br>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $entradaA = $_POST['entradaA'];
        $entradaB = $_POST['entradaB'];

        $A = filter_var($entradaA, FILTER_VALIDATE_BOOLEAN);
        $B = filter_var($entradaB, FILTER_VALIDATE_BOOLEAN);

        $and = $A && $B;
        $or = $A || $B;
        $xor = $A ^ $B;

        echo "A AND B: " . ($and ? 'true' : 'false') . "<br>";
        echo "A OR B: " . ($or ? 'true' : 'false') . "<br>";
        echo "A XOR B: " . ($xor ? 'true' : 'false') . "<br>";
    }
    ?>
    <br><a href="index.html">Volver a la página principal</a>
</body>
</html>
