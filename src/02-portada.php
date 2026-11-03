<?php
$title = 'Portada de Jukebox';
$subtitle = 'Tu colección de canciones favorita';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <header>
        <h1><?= $title ?></h1>
        <p><?= $subtitle ?></p>
    </header>
    <nav>
        <a href="03-cancion.php">Canción</a>
        <a href="07-catalogo.php">Catálogo</a>
    </nav>
</body>
</html>
