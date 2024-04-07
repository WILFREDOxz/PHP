<!DOCTYPE html>
<html>
<head>
    <title>Determinar si un Año es Bisiesto</title>
</head>
<body>
    <h2>Determinar si un Año es Bisiesto</h2>
    <form method="post">
        Ingresa un año:
        <input type="number" name="año" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $año = $_POST['año'];
        if (($año % 4 == 0 && $año % 100 != 0) || $año % 400 == 0) {
            echo "$año es un año bisiesto.";
        } else {
            echo "$año no es un año bisiesto.";
        }
    }
    ?>
</body>
</html>