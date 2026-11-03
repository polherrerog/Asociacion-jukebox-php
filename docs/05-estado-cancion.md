# Bloque 5: Separar funciones y datos

## 1. Encargo del cliente
Modularizar el proyecto separando las funciones de formateo y los datos iniciales en archivos de librería reutilizables mediante `require_once`.

## 2. Archivos modificados y creados
- `src/lib/canciones.php`: Definición de la función `duracionLegible(int $total): string`.
- `src/lib/catalogo-inicial.php`: Archivo que retorna el array del catálogo.
- `src/08-funciones.php`: Punto de carga para probar la reutilización.

## 3. Pruebas de verificación

### Dependencia de archivo
- Prueba: Se modifica temporalmente el nombre del archivo en `require_once`.
- Resultado: Se genera un error fatal (`Fatal error: require_once(): Failed opening required...`) y la ejecución se detiene.
- Explicación: A diferencia de `include`, `require_once` garantiza que la librería sea imprescindible para el funcionamiento del script.