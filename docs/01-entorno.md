# Bloque 1: Levantar el primer servicio

## 1. Encargo del cliente
La asociación necesita verificar que el servidor local ejecuta código PHP correctamente utilizando Docker Compose, Apache y puertos mapeados.

## 2. Archivos modificados y creados
- `compose.yaml`: Configuración del servicio web con PHP 8.5 Apache en el puerto 8090.
- `src/01-bienvenida.php`: Punto de comprobación con un saludo inicial en PHP.

## 3. Pruebas de verificación

### Prueba Válida (Acceso correcto)
- URL / Comando: `curl.exe -i http://localhost:8090/01-bienvenida.php`
- Resultado Esperado: Código HTTP `200 OK` y el texto `"Bienvenido al jukebox de la asociación"`.
- Resultado Observado:
  ```text
  HTTP/1.1 200 OK
  ...
  Bienvenido al jukebox de la asociación