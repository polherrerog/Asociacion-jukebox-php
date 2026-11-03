# Bloque 12: Matriz de Pruebas de Aceptación Final

| # | Prueba | Preparación | Resultado Esperado | Resultado Real | Estado |
| :--- | :--- | :--- | :--- | :--- | :--- |
| 1 | Entorno Multiservicio | `docker compose up -d` en `docker/` | Contenedores levantados en puerto 8091 | Servicios healthy, PDO conectan correctamente | OK |
| 2 | Registro Protegido | Enviar formulario con e-mail duplicado | Error de validación, no crea registro | Rechazado con mensaje en pantalla | OK |
| 3 | Control de Acceso | Navegar directamente a `home.php` sin Login | Redirección 303 a `login.php` | Redirigido correctamente | OK |
| 4 | Operación CRUD | Borrar canción ID 2 y editar ID 3 | Mantiene persistencia sin corromper el JSON | JSON actualizado y consistente | OK |
| 5 | Persistencia | Reiniciar el servicio web con `docker compose restart` | Mantiene usuarios y canciones guardados | Datos intactos tras el reinicio | OK |
| 6 | Integración API | Carga de `api/canciones.php` desde JS | El reproductor Howler reproduce las pistas | Reproducción y controles funcionando | OK |