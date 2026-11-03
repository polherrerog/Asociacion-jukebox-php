# Bloque 8: Leer el catálogo desde JSON

## 1. Encargo del cliente
Desvincular los datos del código PHP para leer la colección desde el archivo privado `docker/data/canciones.json`.

## 2. Archivos modificados y creados
- `docker/data/canciones.json`: Lista JSON con la colección de canciones.
- `docker/src/lib/almacen-json.php`: Funciones `leerJSON()` y `guardarJSON()` con soporte de bloqueos (`flock`).
- `docker/src/12-catalogo-json.php`: Lectura y renderizado en HTML.

## 3. Pruebas de verificación
- Formato Correcto: `json_decode()` convierte la lista JSON en un array asociativo PHP.
- Error de Formato JSON: Ante una sintaxis JSON corrupta, `JSON_THROW_ON_ERROR` lanza una excepción capturada por `catch (Throwable $e)`, devolviendo un mensaje de error sin borrar el archivo.