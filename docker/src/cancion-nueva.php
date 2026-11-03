<?php
require __DIR__ . '/lib/almacen-json.php';
require __DIR__ . '/lib/acceso.php';

requireLogin();
$mensaje = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = trim($_POST['titulo'] ?? '');
    $artista = trim($_POST['artista'] ?? '');
    $duracion = (int) ($_POST['duracion'] ?? 0);

    if ($titulo === '' || $artista === '' || $duracion <= 0) {
        $mensaje = 'Los datos no son válidos.';
    } else {
        $canciones = leerJson(__DIR__ . '/../data/canciones.json');
        $nuevoId = count($canciones) ? max(array_column($canciones, 'id')) + 1 : 1;
        $canciones[] = ['id' => $nuevoId, 'titulo' => $titulo, 'artista' => $artista, 'duracion' => $duracion, 'genero' => 'Sin clasificar'];
        guardarJson(__DIR__ . '/../data/canciones.json', $canciones);
        header('Location: canciones.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva canción</title>
</head>
<body>
    <h1>Añadir canción</h1>
    <?php if ($mensaje !== ''): ?>
        <p><?= $mensaje ?></p>
    <?php endif; ?>
    <form method="post">
        <label>Título: <input type="text" name="titulo"></label><br><br>
        <label>Artista: <input type="text" name="artista"></label><br><br>
        <label>Duración (segundos): <input type="number" name="duracion"></label><br><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
