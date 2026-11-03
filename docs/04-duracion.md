# Bloque 4: Construir el catálogo musical

## 1. Encargo del cliente
Generar listas estructuradas mediante bucles e implementar la primera colección del catálogo usando un array asociativo multidimensional.

## 2. Archivos modificados y creados
- `src/06-listas.php`: Ejemplos con bucles `for`, `while` y `foreach`.
- `src/07-catalogo.php`: Definición de la colección `$songs` con claves `id`, `title`, `artist`, `category`, `duration` y `src`.

## 3. Pruebas de verificación

### Comprobación de catálogo con datos
- Resultado: Recorrido con `foreach` que genera una lista en HTML con todas las canciones sin duplicar código de presentación.

### Comprobación de catálogo vacío
- Condición: `$songs = [];`
- Resultado Observado: Muestra el mensaje alternativo `"Todavía no hay canciones"`.
- Explicación: Se valida la condición `empty($songs)` antes de ejecutar la estructura repetitiva.