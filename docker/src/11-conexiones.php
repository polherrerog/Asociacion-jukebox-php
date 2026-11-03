<?php
require __DIR__ . '/lib/almacen-json.php';

$canciones = leerJson(__DIR__ . '/../data/canciones.json');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexiones</title>
</head>
<body>
    <h1>Conexiones y almacenamiento</h1>
    <p>Se han cargado <?= count($canciones) ?> canciones desde el archivo JSON.</p>
    <a href="home.php">Volver a inicio</a>
</body>
</html>
