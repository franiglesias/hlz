FROM ubuntu:16.04

RUN apt-get update
RUN apt-get install locales
RUN locale-gen en_US.UTF-8
RUN LANG=en_US.UTF-8 apt-get install -y curl software-properties-common git wget vim
RUN LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php

RUN apt-get update --fix-missing

RUN apt-get install -y php7.1-cli php7.1-common php7.1-curl php7.1-mbstring \
                php7.1-dev php7.1-json php7.1-pgsql php7.1-odbc php7.1-opcache \
                php7.1-xml php7.1-xmlrpc php7.1-xsl php7.1-zip php7.1-sqlite \
                php7.1-bcmath php7.1-soap php7.1-xdebug ant

RUN curl https://getcomposer.org/installer > composer-setup.php && \
    php composer-setup.php && \
    mv composer.phar /usr/local/bin/composer && \
    rm composer-setup.php


ADD docker/xdebug.ini /etc/php/7.1/cli/conf.d/20-xdebug.ini
RUN HOST_IP="$(/sbin/ip route|awk '/default/ { print $3 }')" \
    && echo "xdebug.remote_host=${HOST_IP}" >> /etc/php/7.1/cli/conf.d/20-xdebug.ini


WORKDIR /home
