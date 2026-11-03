<?php
require __DIR__ . '/lib/canciones.php';

$filtro = $_GET['genero'] ?? 'todos';
$catalogo = obtenerCatalogo();

if ($filtro !== 'todos') {
    $catalogo = array_values(array_filter($catalogo, fn($cancion) => $cancion['genero'] === $filtro));
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Filtro</title>
</head>
<body>
    <h1>Filtrar canciones</h1>
    <form method="get">
        <label for="genero">Género:</label>
        <select id="genero" name="genero">
            <option value="todos" <?= $filtro === 'todos' ? 'selected' : '' ?>>Todos</option>
            <option value="Pop" <?= $filtro === 'Pop' ? 'selected' : '' ?>>Pop</option>
            <option value="Rock" <?= $filtro === 'Rock' ? 'selected' : '' ?>>Rock</option>
            <option value="Jazz" <?= $filtro === 'Jazz' ? 'selected' : '' ?>>Jazz</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <ul>
        <?php foreach ($catalogo as $cancion): ?>
            <li><?= $cancion['titulo'] ?> - <?= $cancion['genero'] ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
