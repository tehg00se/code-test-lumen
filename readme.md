# Code Test: Lumen

A simple Lumen app designed to provide a basic API for our code test.

### Requirements

* PHP (7.2+) or an environment like [Laravel Homestead](https://laravel.com/docs/6.x/homestead) or Docker (see below)

* [Composer](http://getcomposer.org/)

### Setup

1. Run `composer install` to install dependencies

1. Set up your `.env` file
    1. Copy the `.env.example` file to `.env`
    1. Run `php artisan key:generate` to create a unique app key

1. Run `touch database/database.sqlite` to create a development database

1. Run `php artisan migrate` to migrate your development database

1. Run `php artisan db:seed` to seed your development database

1. Run `php -S localhost:3000 -t public` to start up the local development server (skip this step if using Homestead/Docker)

You should get JSON output from http://localhost:3000/members

### Testing

Install [phpunit](https://phpunit.de/) and run `phpunit` to run the test suite.

### Docker

As an alternative to installing PHP directly, you can use the Docker files provided by [Laradock](https://laradock.io) to run the app and test suite.

> When cloning the project, use the `--recurse-submodules` flag to pull down the Laradock submodule

1. `cd laradock`

1. `cp env-example .env`

1. Change `NGINX_HOST_HTTP_PORT` to `3000`

1. `docker-compose up -d nginx`

Then connect to the Docker container using `docker-compose exec workspace bash` to run the [Setup tasks](#setup) above.
