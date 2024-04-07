<!DOCTYPE html>
<html>
<head>
    <title>Calculadora Básica</title>
</head>
<body>
    <h2>Calculadora Básica</h2>
    <form method="post">
        Primer número:
        <input type="number" name="num1" required><br>
        Segundo número:
        <input type="number" name="num2" required><br>
        Operación:
        <select name="op">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
        </select><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $op = $_POST['op'];
        switch ($op) {
            case 'suma':
                $result = $num1 + $num2;
                break;
            case 'resta':
                $result = $num1 - $num2;
                break;
            case 'multiplicacion':
                $result = $num1 * $num2;
                break;
            case 'division':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "División por cero no permitida";
                }
                break;
            default:
                $result = "Operación no válida";
                break;
        }
        echo "Resultado: $result";
    }
    ?>
</body>
</html>