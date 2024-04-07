<!DOCTYPE html>
<html>
<head>
    <title>Convertidor de Temperaturas</title>
</head>
<body>
    <h2>Convertidor de Temperaturas</h2>
    <form method="post">
        Temperatura:
        <input type="text" name="temp" required>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST['temp'];
        $unit = $_POST['unit'];
        if ($unit == 'celsius') {
            $converted_temp = ($temp * 9/5) + 32;
            echo "$temp Celsius = $converted_temp Fahrenheit";
        } elseif ($unit == 'fahrenheit') {
            $converted_temp = ($temp - 32) * 5/9;
            echo "$temp Fahrenheit = $converted_temp Celsius";
        }
    }
    ?>
</body>
</html>