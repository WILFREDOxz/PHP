<!DOCTYPE html>
<html>
<head>
    <title>Palabras Prohibidas en un Texto</title>
</head>
<body>
    <h2>Palabras Prohibidas en un Texto</h2>
    <form method="post">
        Ingrese un texto:
        <textarea name="texto" required></textarea><br>
        Palabras Prohibidas (separadas por coma):
        <input type="text" name="prohibidas" required><br>
        <input type="submit" value="Procesar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $texto = $_POST['texto'];
        $prohibidas = explode(",", $_POST['prohibidas']);
        foreach ($prohibidas as $palabra) {
            $texto = str_ireplace(trim($palabra), "***", $texto);
        }
        echo "Texto censurado: $texto";
    }
    ?>
</body>
</html>