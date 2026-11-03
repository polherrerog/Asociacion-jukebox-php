<?php
$listas = [
    'Favoritas' => ['Mare Nostrum', 'Noche de verano'],
    'Descubrir' => ['Ritmo del barrio', 'Paseo nocturno'],
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listas</title>
</head>
<body>
    <h1>Listas de reproducción</h1>
    <?php foreach ($listas as $nombre => $canciones): ?>
        <h2><?= $nombre ?></h2>
        <ul>
            <?php foreach ($canciones as $cancion): ?>
                <li><?= $cancion ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</body>
</html>
