<?php
$cancion = [
    'titulo' => 'Ritmo del barrio',
    'reproduciendo' => true,
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estado de canción</title>
</head>
<body>
    <h1><?= $cancion['titulo'] ?></h1>
    <?php if ($cancion['reproduciendo']): ?>
        <p style="color: green;">La canción está reproduciéndose.</p>
    <?php else: ?>
        <p style="color: gray;">La canción está en pausa.</p>
    <?php endif; ?>
</body>
</html>
