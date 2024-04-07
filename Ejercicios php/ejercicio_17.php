<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Edad</title>
</head>
<body>
    <h2>Calculadora de Edad</h2>
    <form method="post">
        Fecha de nacimiento:
        <input type="date" name="fecha_nacimiento" required><br>
        <input type="submit" value="Calcular Edad">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $fecha_nacimiento = new DateTime($_POST['fecha_nacimiento']);
        $hoy = new DateTime();
        $edad = $hoy->diff($fecha_nacimiento);
        echo "Tu edad es: " . $edad->y . " años, " . $edad->m . " meses y " . $edad->d . " días.";
    }
    ?>
</body>
</html>