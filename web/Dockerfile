FROM wodby/wordpress-php:7.2-dev-4.12.7

RUN mkdir -p /home/wodby/blackfire \
    && curl -A "Docker" -L https://blackfire.io/api/v1/releases/client/linux_static/amd64 | tar zxp -C /home/wodby/blackfire \
    && sudo mv /home/wodby/blackfire/blackfire /usr/local/bin/blackfire \
    && rm -Rf /home/wodby/blackfire
