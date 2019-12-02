# Code Test: Lumen

A simple Lumen app designed to provide a basic API for our code test.

### Quick start

1. Install php or use an environment like [Laravel Homestead](https://laravel.com/docs/6.x/homestead)
> Recommended PHP version >= 7.2

1. Install [composer](http://getcomposer.org/) and run `composer install` to install dependencies

1. Set up your `.env` file
  1. Copy the `.env.example` file to `.env`
  1. Run `php artisan key:generate` to create a unique app key

1. Run `touch database/database.sqlite` to create a development database

1. Run `php artisan migrate` to migrate your development database

1. Run `php artisan db:seed` to seed your development database

1. Run `php -S localhost:3000 -t public` to start up the local development server

You should get JSON output from http://localhost:3000/members

### Testing

Install [phpunit](https://phpunit.de/) and run `phpunit` to run the test suite.

### Docker

As an alternative to installing PHP directly, you can use the Docker files provided by [Laradock](https://laradock.io) to run the app and test suite.

1. `cd laradock`

1. `cp env-example .env`

1. `docker-compose up -d nginx`

Then connect to the Docker container using `docker-compose exec workspace bash` to run the tasks above.
