# Code Test: Lumen

A simple Lumen app designed to provide a basic API for our code test.

### Quick start

1. Install php or use an environment like [Laravel Homestead](https://laravel.com/docs/5.4/homestead)
> Recommended version >= 7.0

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
