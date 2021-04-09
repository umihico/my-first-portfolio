FROM php:8.0

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt update && \
    apt-get install zip git -y
