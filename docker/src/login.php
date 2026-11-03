<?php
require __DIR__ . '/lib/sesion.php';

$mensaje = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = trim($_POST['usuario'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($usuario === '' || $password === '') {
        $mensaje = 'Introduce usuario y contraseña.';
    } else {
        $_SESSION['usuario'] = $usuario;
        $_SESSION['login'] = true;
        header('Location: home.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if ($mensaje !== ''): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Usuario: <input type="text" name="usuario"></label><br><br>
        <label>Password: <input type="password" name="password"></label><br><br>
        <button type="submit">Entrar</button>
    </form>
    <p><a href="register.php">Registrarse</a></p>
</body>
</html>
