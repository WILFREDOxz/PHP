<!DOCTYPE html>
<html>
<head>
    <title>Mayor de Tres Números</title>
</head>
<body>
    <h2>Determinar el Mayor de Tres Números</h2>
    <form method="post">
        Primer número:
        <input type="number" name="num1" required><br>
        Segundo número:
        <input type="number" name="num2" required><br>
        Tercer número:
        <input type="number" name="num3" required><br>
        <input type="submit" value="Determinar Mayor">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $num3 = $_POST['num3'];
        $max = max($num1, $num2, $num3);
        echo "El número mayor es: $max";
    }
    ?>
</body>
</html>