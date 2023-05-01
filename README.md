## Setup

Docker ENV Setup, the output port , PHP , Mailhog , Xdebug ports can be set.

`cp .env.example .env`

## Get the UID and GID

`export UID=$(id -u)`

`export GID=$(id -g)`

## Make the container Up & Running

`docker compose up -d --build` build is only required at the initial time

## Write Permission for logs folder

Here you can clone the Laravel project to src folder
Run the below commands from the `project_folder/src` of the project using CLI

`chmod -R 777 storage/ bootstrap/cache`

`cp .env.example .env`

## Migrate the DB schema and Seed the tables

Run the below commands from `project_folder/src`

`docker compose run --rm artisan migrate`

`docker compose run --rm artisan db:seed`

or If you're using different data base docker with docker network concept.

`docker exec PHP_CONTAINER_NAME  php artisan migrate`

`docker exec PHP_CONTAINER_NAME  php artisan db:seed`

## Swagger API

[API Documentation](http://localhost:88/api/docs)

Generate Documentation From code base

`docker compose run --rm  php vendor/bin/openapi app -o public/apidocs/swagger.json`

## PHPUnit Test

`docker exec PHP_CONTAINER_NAME  php artisan test`

## Access The CLI

docker ps

docker exec -it <redis container ID> redis-cli

## Postgres Access

docker exec -it <postgres container ID> bash

## Containers on the same network

docker network create DockerNet

docker network connect DockerNet postgres

docker network connect DockerNet PHP_CONTAINER_NAME

docker network inspect DockerNet
