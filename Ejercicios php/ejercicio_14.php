<!DOCTYPE html>
<html>
<head>
    <title>Contador de Caracteres en un Texto</title>
</head>
<body>
    <h2>Contador de Caracteres en un Texto</h2>
    <form method="post">
        Ingresa un texto:
        <input type="text" name="texto" required>
        <input type="submit" value="Contar Caracteres">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $num_caracteres = strlen($texto);
        echo "El número de caracteres en el texto es: $num_caracteres";
    }
    ?>
</body>
</html>