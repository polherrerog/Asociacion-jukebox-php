# Asociación Jukebox PHP

Proyecto docente para practicar PHP con un jukebox y distintos bloques de ejercicios.

## Estructura

- `src/`: ejercicios de la etapa 1 (bloques 1 a 10)
- `docker/src/`: versión final de la aplicación y bloques 11+
- `data-ejemplo/`: archivos JSON para pruebas y copias limpias
- `docs/`: resumen de cada bloque

## Etapa 1

Se ejecuta con Docker en el puerto `8090`.

```bash
docker compose up --build
```

Accede a la app en:

- http://localhost:8090

## Etapa 2

Configuración multiservicio con Apache + PHP y JSON persistente en `docker/data`.

```bash
cd docker
docker compose up --build
```

Accede en:

- http://localhost:8091

## Notas

- Los archivos reales de datos de la etapa 2 se guardan en `docker/data/` y quedan fuera del control de versiones.
- Los ejemplos iniciales se dejan en `data-ejemplo/` para reutilizar al iniciar tareas nuevas.
