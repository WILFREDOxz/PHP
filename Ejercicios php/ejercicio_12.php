<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de IMC</title>
</head>
<body>
    <h2>Calculadora de IMC (Índice de Masa Corporal)</h2>
    <form method="post">
        Peso (kg):
        <input type="number" name="peso" step="any" required><br>
        Altura (m):
        <input type="number" name="altura" step="any" required><br>
        <input type="submit" value="Calcular IMC">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $imc = $peso / ($altura * $altura);
        echo "Tu IMC es: $imc<br>";
        if ($imc < 18.5) {
            echo "Bajo peso";
        } elseif ($imc >= 18.5 && $imc < 24.9) {
            echo "Peso normal";
        } elseif ($imc >= 25 && $imc < 29.9) {
            echo "Sobrepeso";
        } else {
            echo "Obesidad";
        }
    }
    ?>
</body>
</html>