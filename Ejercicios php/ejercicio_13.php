<!DOCTYPE html>
<html>
<head>
    <title>Generador de Contraseñas Aleatorias</title>
</head>
<body>
    <h2>Generador de Contraseñas Aleatorias</h2>
    <form method="post">
        Longitud de la contraseña:
        <input type="number" name="longitud" required><br>
        <input type="submit" value="Generar Contraseña">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $longitud = $_POST['longitud'];
        $caracteres = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+[]{}|;:,.<>?';
        $contraseña = '';
        for ($i = 0; $i < $longitud; $i++) {
            $indice = rand(0, strlen($caracteres) - 1);
            $contraseña .= $caracteres[$indice];
        }
        echo "Contraseña generada: $contraseña";
    }
    ?>
</body>
</html>