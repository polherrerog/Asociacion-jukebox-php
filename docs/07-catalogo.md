# Bloque 7: Preparar la segunda etapa de Docker

## 1. Encargo del cliente
Crear el entorno de la segunda etapa en el puerto 8091 con virtual hosts en Apache, volumen privado `/var/www/data` fuera de la web y servicios de base de datos PostgreSQL y MariaDB.

## 2. Archivos modificados y creados
- `docker/compose.yaml`: Configuración multiservicio (web, postgres, mariadb).
- `docker/Dockerfile`: Imagen personalizada con extensiones `pdo_pgsql` y `pdo_mysql`.
- `docker/apache/jukebox.conf`: VirtualHost con DocumentRoot `/var/www/html`.
- `docker/src/11-conexiones.php`: Script de prueba de conexiones PDO.

## 3. Pruebas de verificación
- Comando de estado: `docker compose ps`
- Verificación de conexión PDO: `curl.exe -i http://localhost:8091/11-conexiones.php`
  - Resultado: JSON con estado `"ok"` en ambos motores de base de datos.
- Seguridad del montaje: Los archivos ubicados en `/var/www/data/` no son accesibles directamente por la URL pública.