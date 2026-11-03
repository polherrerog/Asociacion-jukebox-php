# Bloque 9: Sesiones, Registro y Login

## 1. Encargo del cliente
Proteger las acciones mediante sesión del servidor, tokens CSRF anti-falsificación y permitir la creación e inicio de sesión de usuarios con contraseñas cifradas.

## 2. Archivos modificados y creados
- `docker/src/lib/sesion.php`: Configuración segura de cookies de sesión (`httponly`, `samesite`) y generación del token CSRF.
- `docker/src/lib/acceso.php`: Verificación de acceso a páginas privadas.
- `docker/src/register.php`: Validación de registro, duplicados y hash con `password_hash()`.
- `docker/src/login.php`: Comprobación de credenciales con `password_verify()`.
- `docker/src/logout.php`: Destrucción de la sesión mediante `POST`.

## 3. Pruebas de seguridad
- Sin Token CSRF: Modificación/Eliminación del campo oculto `csrf` produce una respuesta `403 Forbidden`.
- Protección de Contraseñas: El archivo `docker/data/usuarios.json` solo almacena el hash seguro generado por `PASSWORD_DEFAULT`, nunca la clave original.
- Intento de Acceso Directo: Abrir `home.php` sin sesión activa redirige automáticamente a `login.php` (HTTP 303).