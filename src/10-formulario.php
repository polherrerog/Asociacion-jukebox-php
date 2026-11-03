<?php
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if ($nombre === '' || $email === '') {
        $mensaje = 'Debes completar todos los campos.';
    } else {
        $mensaje = 'Gracias, ' . htmlspecialchars($nombre) . '. Hemos recibido tu correo: ' . htmlspecialchars($email) . '.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form method="post">
        <label>Nombre: <input type="text" name="nombre"></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <button type="submit">Enviar</button>
    </form>

    <?php if ($mensaje !== ''): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>
</body>
</html>
