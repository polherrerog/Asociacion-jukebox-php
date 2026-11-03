<?php
require __DIR__ . '/lib/sesion.php';

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($usuario === '' || $email === '' || $password === '') {
        $mensaje = 'Todos los campos son obligatorios.';
    } else {
        $mensaje = 'Registro simulado correcto para ' . htmlspecialchars($usuario) . '.';
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h1>Registro</h1>
    <?php if ($mensaje !== ''): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Usuario: <input type="text" name="usuario"></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <label>Password: <input type="password" name="password"></label><br><br>
        <button type="submit">Crear cuenta</button>
    </form>
    <p><a href="login.php">Iniciar sesión</a></p>
</body>
</html>
