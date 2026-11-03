# Bloque 3: Calcular y decidir sobre una canción

## 1. Encargo del cliente
Transformar la duración en segundos a minutos y segundos, y aplicar reglas de negocio para clasificar la duración de los temas.

## 2. Archivos modificados y creados
- `src/04-duracion.php`: Cálculo aritmético con `intdiv()` y operador resto `%`.
- `src/05-estado-cancion.php`: Estructura condicional `if / elseif / else`.

## 3. Pruebas de verificación

### Tabla de duraciones evaluadas
| Segundos (`$duration`) | Minutos (`intdiv`) | Segundos (`%`) | Clasificación devuelta |
| :--- | :--- | :--- | :--- |
| `0` | 0 | 0 | "Sin duración" |
| `1` | 0 | 1 | "Hasta cuatro minutos" |
| `240` | 4 | 0 | "Hasta cuatro minutos" |
| `241` | 4 | 1 | "Más de cuatro minutos" |

### Comparación estricta
- Comprobación: `$duration === '185'`
- Resultado: `false`.
- Explicación: Se utiliza la comparación estricta (`===`) para verificar tanto el valor como el tipo de dato (entero vs. cadena), evitando conversiones implícitas.