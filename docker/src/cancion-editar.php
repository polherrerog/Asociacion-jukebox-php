<?php
require __DIR__ . '/lib/almacen-json.php';
require __DIR__ . '/lib/acceso.php';

requireLogin();
$id = (int) ($_GET['id'] ?? 0);
$canciones = leerJson(__DIR__ . '/../data/canciones.json');
$cancion = null;
foreach ($canciones as $item) {
    if ((int) $item['id'] === $id) {
        $cancion = $item;
        break;
    }
}

if ($cancion === null) {
    header('Location: canciones.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar canción</title>
</head>
<body>
    <h1>Editar canción</h1>
    <form method="post" action="cancion-eliminar.php">
        <p><strong>Título:</strong> <?= htmlspecialchars($cancion['titulo']) ?></p>
        <p><strong>Artista:</strong> <?= htmlspecialchars($cancion['artista']) ?></p>
        <p><strong>Duración:</strong> <?= (int) $cancion['duracion'] ?></p>
        <button type="submit" name="id" value="<?= $id ?>">Eliminar</button>
    </form>
    <p><a href="canciones.php">Volver</a></p>
</body>
</html>
