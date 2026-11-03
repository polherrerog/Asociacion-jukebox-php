<?php
require __DIR__ . '/../lib/almacen-json.php';

header('Content-Type: application/json');
$canciones = leerJson(__DIR__ . '/../../data/canciones.json');
echo json_encode($canciones, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
