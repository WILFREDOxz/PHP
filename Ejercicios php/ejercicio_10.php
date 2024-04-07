<!DOCTYPE html>
<html>
<head>
    <title>Inversión de una Cadena</title>
</head>
<body>
    <h2>Inversión de una Cadena</h2>
    <form method="post">
        Ingresa una cadena de texto:
        <input type="text" name="cadena" required>
        <input type="submit" value="Invertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $cadena = $_POST['cadena'];
        $cadena_invertida = strrev($cadena);
        echo "Cadena invertida: $cadena_invertida";
    }
    ?>
</body>
</html>