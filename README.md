<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)


Clone the repository

    git clone https://github.com/perladarianny15/monteroc-app.git

Switch to the repo folder

    cd monteroc-app

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

This is how your .env db config should look like:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=8889
    DB_DATABASE=MonterocDB
    DB_USERNAME=root
    DB_PASSWORD=root
    DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock (DEPENDING DB)

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**TL;DR command list**

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git
    cd laravel-realworld-example-app
    composer install
    cp .env.example .env
    php artisan key:generate
    php artisan jwt:generate 
    
**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------