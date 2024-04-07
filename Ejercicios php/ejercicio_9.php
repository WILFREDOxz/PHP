<!DOCTYPE html>
<html>
<head>
    <title>Contador de Palabras</title>
</head>
<body>
    <h2>Contador de Palabras</h2>
    <form method="post">
        Ingresa un texto:
        <input type="text" name="texto" required>
        <input type="submit" value="Contar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $num_palabras = str_word_count($texto);
        echo "El número de palabras en el texto es: $num_palabras";
    }
    ?>
</body>
</html>