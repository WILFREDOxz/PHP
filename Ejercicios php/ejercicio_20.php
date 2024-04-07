<!DOCTYPE html>
<html>
<head>
    <title>Sorteo</title>
</head>
<body>
    <h2>Sorteo</h2>
    <form method="post">
        Ingresa tu nombre:
        <input type="text" name="nombre" required><br>
        <input type="submit" value="Participar en el Sorteo">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $ganador = rand(0, 1);
        if ($ganador) {
            echo "¡Felicidades, $nombre! ¡Has ganado!";
        } else {
            echo "Lo siento, $nombre. Mejor suerte la próxima vez.";
        }
    }
    ?>
</body>
</html>