<?php
require __DIR__ . '/lib/canciones.php';

$catalogo = obtenerCatalogo();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Funciones</title>
</head>
<body>
    <h1>Funciones reutilizables</h1>
    <ul>
        <?php foreach ($catalogo as $cancion): ?>
            <li><?= $cancion['titulo'] ?> (<?= $cancion['artista'] ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
