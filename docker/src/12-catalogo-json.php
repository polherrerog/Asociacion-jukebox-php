<?php
require __DIR__ . '/lib/almacen-json.php';

$canciones = leerJson(__DIR__ . '/../data/canciones.json');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo JSON</title>
</head>
<body>
    <h1>Catálogo cargado desde JSON</h1>
    <ul>
        <?php foreach ($canciones as $cancion): ?>
            <li><?= htmlspecialchars($cancion['titulo']) ?> - <?= htmlspecialchars($cancion['artista']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
