<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Temperaturas Extendido</title>
</head>
<body>
    <h2>Conversor de Temperaturas Extendido</h2>
    <form method="post">
        Temperatura:
        <input type="number" name="temp" required>
        <select name="from">
            <option value="celsius">Celsius (°C)</option>
            <option value="fahrenheit">Fahrenheit (°F)</option>
            <option value="kelvin">Kelvin (K)</option>
        </select>
        a
        <select name="to">
            <option value="celsius">Celsius (°C)</option>
            <option value="fahrenheit">Fahrenheit (°F)</option>
            <option value="kelvin">Kelvin (K)</option>
        </select><br>
        <input type="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $temp = $_POST['temp'];
        $from = $_POST['from'];
        $to = $_POST['to'];
        if ($from == 'celsius' && $to == 'fahrenheit') {
            $result = ($temp * 9/5) + 32;
            echo "$temp °C = $result °F";
        } elseif ($from == 'fahrenheit' && $to == 'celsius') {
            $result = ($temp - 32) * 5/9;
            echo "$temp °F = $result °C";
        } elseif ($from == 'celsius' && $to == 'kelvin') {
            $result = $temp + 273.15;
            echo "$temp °C = $result K";
        } elseif ($from == 'kelvin' && $to == 'celsius') {
            $result = $temp - 273.15;
            echo "$temp K = $result °C";
        } elseif ($from == 'fahrenheit' && $to == 'kelvin') {
            $result = ($temp - 32) * 5/9 + 273.15;
            echo "$temp °F = $result K";
        } elseif ($from == 'kelvin' && $to == 'fahrenheit') {
            $result = ($temp - 273.15) * 9/5 + 32;
            echo "$temp K = $result °F";
        } else {
            echo "Las unidades seleccionadas no son compatibles.";
        }
    }
    ?>
</body>
</html>