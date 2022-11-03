# Laravel Project

A complete e-commerce website for my personal project list

## Features

-   Admin can upload product with image, price, and description.
-   User login form.
-   Add cart and see the cart.
-   Remove the product from the cart.
-   purchase products with cash delivery

## For Admin Login

To get Admin panel

```bash
  name : admin
  Email : admin@gmail.com
  Password : password
```

## Demo

http://ecomlarvel.herokuapp.com/home

For Admin (first, you need log as a admin)
https://ecomlarvel.herokuapp.com/dashboard

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.4/installation#installation)

Alternative installation is possible without local dependencies relying on [Docker](#docker).

Clone the repository

    git clone git@github.com:gothinkster/laravel-realworld-example-app.git

Switch to the repo folder

    cd laravel-realworld-example-app

Install all the dependencies

    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

**Make sure you set the correct database connection information before running the migrations** [Environment variables](#environment-variables)

    php artisan migrate
    php artisan serve
