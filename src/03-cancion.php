<?php
$cancion = [
    'titulo' => 'Mare Nostrum',
    'artista' => 'La Banda',
    'album' => 'Verano 2026',
    'duracion' => 210,
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Canción</title>
</head>
<body>
    <h1><?= $cancion['titulo'] ?></h1>
    <p><strong>Artista:</strong> <?= $cancion['artista'] ?></p>
    <p><strong>Álbum:</strong> <?= $cancion['album'] ?></p>
    <p><strong>Duración:</strong> <?= $cancion['duracion'] ?> segundos</p>
</body>
</html>
