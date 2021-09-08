# Comunidad de lectura

## Aplicacion WEB para gestionar una comunidad para adultos mayores

## Backend:
  Desarrollo de la API en PHP con el framework LARAVEL que mantiene conexión a una base de datos MySQL.
## Frontend:
  Desarrollo de la vistas en Javascript mediante el framework Angular, las cuales se conectan con la API desarrollada en LARAVEL

## Funcionalidades

- Vista general de todos los libros disponiblles
- Búsqueda por nombre y género de libros
- Foro de discusión
- Vista general de todas las obras creadas por la comunidad
- Permite registrar nuevas obras en el apartado comunidas

## Ejecución

- BACKEND: Para poner el servidor de Laravel es necesario tener instalado artisan, ya que para levantar el servidor se utiliza el comando *php artisan serve*, este será alojado en el puerto 8000, es necesito el uso de mysql y un gestor de base de datos, y colocar la configuración necesaria de la base de datos en el archivo database.php

- FRONTEND: Se necesita tener instalado angular para poder levantar el front, es necesario usar el comando *ng serve*, el cual se encontrará alojado en el puerto 4200 

## Rutas FRONTEND

- Visualización y registro de obras: http://localhost:4200/obra
-AJAX con Larel para busqueda y filtro de libros : http://localhost:8000/live_search
## API BACKEND

- GET de todos las obras: http://localhost:8000/api/obras
- GET por id: http://localhost:8000/api/obras/:id
- POST creación de nuevas obras: http://localhost:8000/api/obras
- GET de los libros y sus autores : http://localhost:8000/api/libros
- POST creacion de nuevos libroshttp: http://localhost:8000/api/libros

