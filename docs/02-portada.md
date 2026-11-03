# Bloque 2: Describir la primera canción

## 1. Encargo del cliente
Presentar la portada del jukebox y crear una ficha inicial utilizando HTML estructurado, variables, constantes, tipos de datos y escape de seguridad.

## 2. Archivos modificados y creados
- `src/02-portada.php`: Estructura HTML5 con enlace al saludo inicial.
- `src/03-cancion.php`: Definición de variables (`$title`, `$artist`, `$duration`, `$volume`, `$available`) y constante `APP_NAME`.

## 3. Pruebas de verificación

### Prueba Válida (Procesamiento del PHP)
- URL: `http://localhost:8090/02-portada.php`
- Ver Código Fuente: En el cliente se recibe la estructura HTML final, sin que aparezcan las etiquetas `<?php` ni instrucciones `echo`. El código de servidor no se expone.

### Prueba de Escape HTML (Seguridad XSS)
- Dato de prueba: `$title = '<b>Sesión de prueba</b>';`
- Función aplicada: `htmlspecialchars($title, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8')`
- Resultado Esperado: Ver el texto `<b>Sesión de prueba</b>` en pantalla sin que se aplique el formato en negrita.
- Explicación: Evita la inyección de código interpretando caracteres especiales como entidades HTML.