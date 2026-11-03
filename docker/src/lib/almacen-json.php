<?php

function leerJson(string $ruta): array
{
    if (!file_exists($ruta)) {
        return [];
    }

    $contenido = file_get_contents($ruta);
    if ($contenido === false || trim($contenido) === '') {
        return [];
    }

    $datos = json_decode($contenido, true);
    return is_array($datos) ? $datos : [];
}

function guardarJson(string $ruta, array $datos): bool
{
    $directorio = dirname($ruta);
    if (!is_dir($directorio)) {
        mkdir($directorio, 0777, true);
    }

    $contenido = json_encode($datos, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    return file_put_contents($ruta, $contenido . PHP_EOL) !== false;
}
