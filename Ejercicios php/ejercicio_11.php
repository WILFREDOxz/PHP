<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Moneda</title>
</head>
<body>
    <h2>Conversor de Moneda</h2>
    <form method="post">
        Cantidad en Quetzales:
        <input type="number" name="cantidad" required><br>
        <input type="submit" value="Convertir a Dólares">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cantidad = $_POST['cantidad'];
        $tasa_cambio = 0.13;
        $resultado = $cantidad * $tasa_cambio;
        echo "$cantidad Q = $resultado USD";
    }
    ?>
</body>
</html>