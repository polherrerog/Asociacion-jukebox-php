<?php
function formatoDuracion(int $segundos): string
{
    $minutos = intdiv($segundos, 60);
    $restante = $segundos % 60;
    return sprintf('%02d:%02d', $minutos, $restante);
}

$cancion = [
    'titulo' => 'Noche de verano',
    'duracion' => 185,
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Duración</title>
</head>
<body>
    <h1><?= $cancion['titulo'] ?></h1>
    <p>Duración: <?= formatoDuracion($cancion['duracion']) ?></p>
</body>
</html>
