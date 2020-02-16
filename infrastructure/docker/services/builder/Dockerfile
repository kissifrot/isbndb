ARG PROJECT_NAME

FROM ${PROJECT_NAME}_php-base

RUN apk add --no-cache \
    curl \
    g++ \
    git \
    make \
    nodejs \
    npm \
    php7-phar \
    py2-pip \
    python

RUN pip install pycodestyle
RUN npm install -g yarn@latest

COPY --from=composer:1.9.3 /usr/bin/composer /usr/bin/composer

RUN mkdir -p ~/.composer

ENV PATH $PATH:/home/app/.composer/vendor/bin/
ENV TERM xterm

WORKDIR /home/app/application

CMD ["echo"]
