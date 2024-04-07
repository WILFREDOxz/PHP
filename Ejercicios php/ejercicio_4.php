<!DOCTYPE html>
<html>
<head>
    <title>Listado de Números Pares e Impares</title>
</head>
<body>
    <h2>Listado de Números Pares e Impares</h2>
    <h3>Números Pares:</h3>
    <?php
    for ($i = 2; $i <= 40; $i += 2) {
        echo "$i ";
    }
    ?>
    <h3>Números Impares:</h3>
    <?php
    for ($i = 1; $i <= 39; $i += 2) {
        echo "$i ";
    }
    ?>
</body>
</html>