FROM php:8.4-cli

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y --no-install-recommends \
    curl \
    git \
    gnupg \
    libicu-dev \
    libxslt-dev \
    unzip \
    zip && \
    apt-get -y autoremove && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install bcmath intl xsl xml

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/
