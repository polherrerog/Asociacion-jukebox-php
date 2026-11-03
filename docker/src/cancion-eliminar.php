<?php
require __DIR__ . '/lib/almacen-json.php';
require __DIR__ . '/lib/acceso.php';

requireLogin();
$id = (int) ($_POST['id'] ?? $_GET['id'] ?? 0);

if ($id > 0) {
    $canciones = leerJson(__DIR__ . '/../data/canciones.json');
    $canciones = array_values(array_filter($canciones, fn($cancion) => (int) $cancion['id'] !== $id));
    guardarJson(__DIR__ . '/../data/canciones.json', $canciones);
}

header('Location: canciones.php');
exit;
