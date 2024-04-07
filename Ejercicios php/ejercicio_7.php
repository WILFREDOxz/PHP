<!DOCTYPE html>
<html>
<head>
    <title>Tablas de Multiplicar</title>
</head>
<body>
    <h2>Tablas de Multiplicar</h2>
    <form method="post">
        Ingrese un número:
        <input type="number" name="numero" required>
        <input type="submit" value="Generar Tabla">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];
        echo "<h3>Tabla de multiplicar del $numero:</h3>";
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "$numero x $i = $resultado <br>";
        }
    }
    ?>
</body>
</html>