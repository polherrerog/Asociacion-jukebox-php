# Bloque 10: Consultar y gestionar canciones (CRUD)

## 1. Encargo del cliente
Implementar las operaciones de Creación, Lectura, Edición y Eliminación del catálogo musical sobre el JSON persistente.

## 2. Archivos modificados y creados
- `docker/src/canciones.php`: Lista completa con acciones (Read).
- `docker/src/cancion-nueva.php`: Alta con asignación automática de ID (Create).
- `docker/src/cancion-editar.php`: Edición de datos por ID mediante `POST` (Update).
- `docker/src/cancion-eliminar.php`: Confirmación y borrado con reordenación de índices (Delete).

## 3. Pruebas de verificación
- ID vs Posición: Los registros se buscan explícitamente por el campo `'id' === $id`, asegurando que la eliminación de un elemento intermedio no afecte las operaciones de los demás.
- Uso de `array_values`: Al borrar con `unset()`, se reconstruyen los índices para garantizar que el resultado exportado continúe siendo un array JSON estructurado.