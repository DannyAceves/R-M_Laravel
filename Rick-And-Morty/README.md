<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

-----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
# Rick and Morty App

## Descripción
Esta aplicación utiliza Laravel para buscar y guardar personajes de Rick and Morty utilizando la [Rick and Morty API](https://rickandmortyapi.com/). Los datos se muestran en una interfaz interactiva utilizando Bootstrap y AJAX.

## Requisitos
- [Composer](https://getcomposer.org/)
- [PHP](https://www.php.net/)
- [Node.js](https://nodejs.org/)
- [npm](https://www.npmjs.com/)

## Instalación
1. Clona este repositorio:
   ```bash
   git clone https://github.com/DannyAceves/R-M_Laravel.git
   cd rick-and-morty-app
   composer install

2. Instala las dependencias de JavaScript:

    ```bash
    npm install


3. Compila los activos:

    ```bash
    npm run dev

4. Copia el archivo de entorno:

    ```bash
    cp .env.example .env

5. Genera la clave de aplicación:

   ```bash
    php artisan key:generate

6. Configura tu base de datos en el archivo .env. adjunto la base de datos que emplie en mi caso
e iniciar XAMPP o su  gestor de base de datos en mi caso XAMPP

    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=rickandmorty 
    DB_USERNAME=root
    DB_PASSWORD=

7. Ejecuta las migraciones de la base de datos:

    ```bash
    php artisan migrate

8. Inicia el servidor:

    ```bash
    php artisan serve


Abre la aplicación en tu navegador: http://127.0.0.1:8000/

Uso

    Ingresa el ID de ubicación y presiona "Buscar".
    Explora los personajes y guarda tus favoritos.

Tecnologías Utilizadas

    Laravel
    Bootstrap
    Axios
    jQuery
    Composer

    Licencia

Este proyecto está bajo la Licencia MIT. Consulta el archivo LICENSE para obtener más detalles.


