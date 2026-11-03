<?php
require __DIR__ . '/lib/sesion.php';
require __DIR__ . '/lib/acceso.php';

$usuario = usuarioActual();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Bienvenido a Jukebox</h1>
    <?php if ($usuario): ?>
        <p>Sesión iniciada como <strong><?= htmlspecialchars($usuario) ?></strong></p>
        <p><a href="logout.php">Cerrar sesión</a></p>
    <?php else: ?>
        <p>No has iniciado sesión.</p>
        <p><a href="login.php">Login</a> | <a href="register.php">Registro</a></p>
    <?php endif; ?>
    <p><a href="canciones.php">Ver catálogo</a></p>
</body>
</html>
