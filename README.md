# Back end del sistema de administración de tareas

Este proyecto proporciona al proyecto front-end una API para menejar las operaciones CRUD.

# Pasos de despliegue

## Crear el .env

Para ello tiene que compiar el archivo .env.example y cambiarle el nombre a .env

## Generar la llave de la aplicacion

----
    php artisan key:generate
----

## Descargar dependencias

Es necesario descargar las dependencias.

----
    composer install
----

## Configuracion de base de datos

Crear una base de datos con el nombre de su preferencia, luego colocara el nombre de la base de datos creada en DB_DATABASE que se encuentra dentro del .env.

Luego ejecutara el servicor virtual de laravel

-----
    php artisan serve
-----

Despues ejecutaras las migraciones junto con los seedes

----
    php artisan migrate --seed
----

Listo los servicios estan listos para ser consumidos por el front - ened
