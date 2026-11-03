# Bloque 6: Recibir peticiones HTTP (GET y POST)

## 1. Encargo del cliente
Implementar filtros de categorías recibidos por `GET` y crear una vista previa de validación de datos enviada por `POST`.

## 2. Archivos modificados y creados
- `src/09-filtro.php`: Captura de `$_GET['category']` con código HTTP 400 ante parámetros no válidos.
- `src/10-formulario.php`: Recepción de `$_POST`, validación con `filter_var` y renderizado de errores/vista previa.

## 3. Matriz de Pruebas GET (`09-filtro.php`)
| Petición / Parámetro | Estado HTTP | Resultado Observado |
| :--- | :--- | :--- |
| `/09-filtro.php` | `200 OK` | Muestra todas las canciones. |
| `/09-filtro.php?category=rock` | `200 OK` | Muestra solo canciones de Rock. |
| `/09-filtro.php?category=desconocida` | `400 Bad Request` | Mensaje: "Categoría no válida". |
| `/09-filtro.php?category[]=rock` | `400 Bad Request` | Rechazado por recibir un Array. |

## 4. Validaciones POST (`10-formulario.php`)
- Duración: Se valida mediante `filter_var($duration, FILTER_VALIDATE_INT)` en el rango de 1 a 1800 segundos.
- Límite: Las entradas inválidas no alteran los datos ni generan avisos del motor de PHP.