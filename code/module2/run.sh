#!/bin/bash

echo "Starting Laravel Deployment"

echo "Installing dependencies"
composer install

echo "Generating app key"
php artisan key:generate

echo "Starting Laravel server"
php artisan serve
