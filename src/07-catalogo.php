<?php
require __DIR__ . '/lib/catalogo-inicial.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo</title>
</head>
<body>
    <h1>Catálogo de canciones</h1>
    <table border="1">
        <tr>
            <th>Título</th>
            <th>Artista</th>
            <th>Género</th>
            <th>Duración</th>
        </tr>
        <?php foreach ($catalogo as $cancion): ?>
            <tr>
                <td><?= $cancion['titulo'] ?></td>
                <td><?= $cancion['artista'] ?></td>
                <td><?= $cancion['genero'] ?></td>
                <td><?= $cancion['duracion'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
