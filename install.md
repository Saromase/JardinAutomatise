# Installation Guide

## Create Container
    docker-compose up

## Install Composer Dependancies
    docker-compose exec php composer install

## Copy .env file and fill it
    cp .env.example .env

## Give rights to storage folder
    chmod -R 777 storage/

## Generate application key
    docker-compose exec php php artisan key:generate
