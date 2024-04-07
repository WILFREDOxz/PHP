<!DOCTYPE html>
<html>
<head>
    <title>Validación de Correo Electrónico</title>
</head>
<body>
    <h2>Validación de Correo Electrónico</h2>
    <form method="post">
        Correo electrónico:
        <input type="email" name="email" required>
        <input type="submit" value="Validar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "El correo electrónico $email es válido.";
        } else {
            echo "El correo electrónico $email no es válido.";
        }
    }
    ?>
</body>
</html>