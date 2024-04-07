<!DOCTYPE html>
<html>
<head>
    <title>Manipulación de Cadenas</title>
</head>
<body>
    <h2>Manipulación de Cadenas</h2>
    <form method="post">
        Ingresa una cadena de texto:
        <input type="text" name="cadena" required>
        <input type="submit" value="Procesar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST['cadena'];
        echo "Texto en mayúsculas: " . strtoupper($cadena) . "<br>";
        echo "Texto en minúsculas: " . strtolower($cadena) . "<br>";
        echo "Cantidad de caracteres: " . strlen($cadena);
    }
    ?>
</body>
</html>