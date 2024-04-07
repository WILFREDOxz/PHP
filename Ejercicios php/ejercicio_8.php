<!DOCTYPE html>
<html>
<head>
    <title>Área y Perímetro de Figuras</title>
</head>
<body>
    <h2>Área y Perímetro de Figuras</h2>
    <form method="post">
        Tipo de Figura:
        <select name="figura">
            <option value="circulo">Círculo</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="rectangulo">Rectángulo</option>
        </select><br>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $figura = $_POST['figura'];
            switch ($figura) {
                case 'circulo':
                    echo "Radio:
                    <input type='number' name='radio' required><br>";
                    break;
                case 'cuadrado':
                    echo "Lado:
                    <input type='number' name='lado' required><br>";
                    break;
                case 'rectangulo':
                    echo "Base:
                    <input type='number' name='base' required><br>
                    Altura:
                    <input type='number' name='altura' required><br>";
                    break;
                default:
                    echo "Seleccione una figura.";
                    break;
            }
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
    a
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        switch ($figura) {
            case 'circulo':
                $radio = $_POST['radio'];
                $area = M_PI * $radio * $radio;
                $perimetro = 2 * M_PI * $radio;
                echo "Área del círculo: $area <br>";
                echo "Perímetro del círculo: $perimetro";
                break;
            case 'cuadrado':
                $lado = $_POST['lado'];
                $area = $lado * $lado;
                $perimetro = 4 * $lado;
                echo "Área del cuadrado: $area <br>";
                echo "Perímetro del cuadrado: $perimetro";
                break;
            case 'rectangulo':
                $base = $_POST['base'];
                $altura = $_POST['altura'];
                $area = $base * $altura;
                $perimetro = 2 * ($base + $altura);
                echo "Área del rectángulo: $area <br>";
                echo "Perímetro del rectángulo: $perimetro";
                break;
            default:
                break;
        }
    }
    ?>
</body>
</html>