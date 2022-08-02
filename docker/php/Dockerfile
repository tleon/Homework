# ./docker/php/Dockerfile
FROM php:8.1-cli

WORKDIR /usr/src/app

ADD ./ /usr/src/app

RUN chown -R www-data:www-data /usr/src/app

USER 1000

CMD tail -f /dev/null