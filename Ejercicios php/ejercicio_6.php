<!DOCTYPE html>
<html>
<head>
    <title>Validación de Edad</title>
</head>
<body>
    <h2>Validación de Edad</h2>
    <form method="post">
        Ingresa tu edad:
        <input type="number" name="edad" required>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $edad = $_POST['edad'];
        if ($edad >= 18) {
            echo "Eres mayor de edad.";
        } else {
            echo "Eres menor de edad.";
        }
    }
    ?>
</body>
</html> 