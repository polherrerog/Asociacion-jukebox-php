<?php
require __DIR__ . '/lib/almacen-json.php';
require __DIR__ . '/lib/acceso.php';

requireLogin();
$canciones = leerJson(__DIR__ . '/../data/canciones.json');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Canciones</title>
</head>
<body>
    <h1>Listado de canciones</h1>
    <p><a href="cancion-nueva.php">Añadir canción</a></p>
    <ul>
        <?php foreach ($canciones as $cancion): ?>
            <li>
                <?= htmlspecialchars($cancion['titulo']) ?> - <?= htmlspecialchars($cancion['artista']) ?>
                <a href="cancion-editar.php?id=<?= (int) $cancion['id'] ?>">Editar</a>
                <a href="cancion-eliminar.php?id=<?= (int) $cancion['id'] ?>">Eliminar</a>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="home.php">Volver</a></p>
</body>
</html>
