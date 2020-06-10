## Dockerized Laravel API boilerplate (PHP, Nginx, MySql, Composer, Node, PHP Artisan)
<p align="center">
  <a href="https://laravel.com/" alt="Built with: Laravel v7.14.1">
    <img src="https://badgen.net/badge/Built%20with/Laravel%20v7.14.1/FF2D20" />
  </a>
  <a href="https://www.php.net/downloads.php" alt="Powered by: PHP v7.4.4">
    <img src="https://badgen.net/badge/Powered%20by/PHP%20v7.4.4/8892BF" />
  </a>
  <a href="https://www.docker.com/get-started" alt="Powered by: Docker v19.03.8">
    <img src="https://badgen.net/badge/Powered%20by/Docker%20v19.03.8/099CEC" />
  </a>
  <a href="https://opensource.org/licenses/MIT" alt="License: MIT">
    <img src="https://img.shields.io/badge/License-MIT-green.svg" />
  </a>
</p>

### Introduction
- Include Persistant MySQL Storage and Custom Nginx configuration for Laravel. 
- Nginx and MySQL expose Ports 8080 and 4306 respectively.

### Docker Images installed
1. PHP, [php:7.4.0-fpm-alpine](https://hub.docker.com/_/php)
2. Nginx,  [nginx:stable-alpine](https://hub.docker.com/_/nginx)
3. MySQL, [mysql:5.7.22](https://hub.docker.com/_/mysql)
4. Composer, [composer:latest](https://hub.docker.com/_/composer)
5. Node, [node:14.1.0](https://hub.docker.com/_/node)
6. PHP Artisan

### Running the Containerized Laravel application
1. Clone the repository.
2. Rename the **".env.example"** file in the root directory to **".env"**.
3. Generate the new application key as follows:
```bash
php artisan key:generate
```
4. Run the containers:
  - Running the containers in detached mode:
  ```bash
  docker-compose up -d
  ```
  - Run the containers in interactive mode:
  ```bash
  docker-compose up -it
  ```
  - Rebuild the containers everytime and run in detached mode:
  ```bash
  docker-compose up -d --build
  ```
5. Create Migration and Seed the User's table as follows:
```bash
docker-compose exec php php artisan migrate
```
6. Open any Web browser or Postman to test the API with the following GET requests:
  - http://localhost:8080/api/users
  - http://localhost:8080/api/users/1

7. Stop and destroy the containers:
```bash
docker-compose down
```

### Other useful Commands
- Composer
```bash
docker-compose run --rm composer install your-vendor-name/package-name
```

- NPM
```bash
docker-compose run --rm npm install
docker-compose run --rm npm run dev
```

- Artisan
```bash
docker-compose exec php php artisan make:model Test -a
```

- Artisan manually
```bash
docker container exec -it php ash
php artisan make:model Test -a
```

- Docker
```bash
docker compose build
docker compose up
docker-compose down
docker ps
docker ps -a
docker container rm container-name
docker container rm container-id
docker container rm container-id -f
docker images
docker image rm image-name
docker image rm image-id
docker image rm image-id -f
```

### Steps to Containerize any Laravel application from scratch
1. Install [Docker](https://www.docker.com/get-started).
2. Install [Composer](https://getcomposer.org/download/).
  - NOTE: Locally installed **Composer** is only be used to create the initial laravel project and dockerized environment will actually use the **Composer** container.
3. Create directories **mysql** and **nginx**.
4. Create **Dockerfile**, **docker-compose.yml** and **dockerignore** files by copying the content from this repository.
5. Create a new laravel project using **Composer**.
6. Run the containers:
  - Running the containers in detached mode:
  ```bash
  docker-compose up -d
  ```
  - Run the containers in interactive mode:
  ```bash
  docker-compose up -it
  ```
  - Rebuild the containers everytime and run in detached mode:
  ```bash
  docker-compose up -d --build
  ```
7. Stop and destroy the containers:
```bash
docker-compose down
```