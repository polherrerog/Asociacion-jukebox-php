# Bloque 11: Conectar el jukebox a la home

## 1. Encargo del cliente
Integrar el reproductor Howler.js en la pantalla privada `home.php` consumiendo la lista de canciones desde un endpoint JSON expuesto por PHP.

## 2. Archivos modificados y creados
- `docker/src/api/canciones.php`: Endpoint JSON con comprobación de sesión.
- `docker/src/home.php`: Reproductor cliente adaptado para cargar la colección con `fetch()`.

## 3. Pruebas de verificación
- Acceso Autorizado a la API: Petición con sesión válida retorna HTTP `200 OK` con `Content-Type: application/json`.
- Acceso Denegado a la API: Petición sin sesión retorna HTTP `401 Unauthorized` con un objeto de error JSON.
- Flujo Completo: Creación de una canción en el CRUD -> Carga inmediata en el reproductor de la `home.php`.