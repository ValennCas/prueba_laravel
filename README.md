# COMANDOS 
## ARTISAN
php artisan make:model nombreModelo -Este comando crea una nueva clase de modelo Eloquent en app/Models

php artisan make:controller nombreControlador -Este comando crea una nueva clase de controlador en app/Http/Controllers

php artisan serve -Levanta un servidor local

php artisan migrate -Sube todas las migraciones que están en base de datos/migrations. Así crea las tablas con sus respectivas columnas y tipos de datos a tu DB.

php artisan route:list -Muestra las rutas que tiene nuestro proyecto


## AUTENTICACION
composer require laravel/breeze:1.9.2
-Laravel Breeze es un paquete que proporciona una estructura básica de autenticación para Laravel. Con su uso, puedes tener un sistema de inicio de sesión y registro totalmente funcional en cuestión de minutos. Es compatible con Blade, Vue y React y también tiene una versión API.

php artisan breeze:install
Para ejecutar

## LARAVEL JETSTREAM
Jetstream ofrece un andamiaje de aplicaciones con un atractivo diseño para Laravel que incluye inicio de sesión, registro, verificación de correo electrónico, autenticación de dos factores, gestión de sesiones, compatibilidad con API a través de Laravel Sanctum y gestión de equipos opcional. 
