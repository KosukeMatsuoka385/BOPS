FROM php:7.3-fpm-alpine
LABEL maintainer "KosukeMatsuoka385"

ARG TZ
ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_HOME /composer

#alpineにbashコマンドを追加
# RUN apk update && apk add bash

# # Node.jsをインストール
# RUN curl -sL https://deb.nodesource.com/setup_10.x | bash -
# RUN apk install -y nodejs

# nodejsをインストールするのに必要
# https://qiita.com/HorikawaTokiya/items/a2a174680d7dd759ccae
RUN apk add --update nodejs nodejs-npm

RUN set -eux && \
  apk add --update-cache --no-cache --virtual=.build-dependencies tzdata && \
  cp /usr/share/zoneinfo/${TZ} /etc/localtime && \
  apk del .build-dependencies && \
  docker-php-ext-install bcmath pdo_mysql && \
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer && \
  composer config -g repos.packagist composer https://packagist.jp && \
  composer global require hirak/prestissimo