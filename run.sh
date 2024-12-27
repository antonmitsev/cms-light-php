docker build -t cms-light-php:latest .
docker container rm -f cms-light-php-c
docker run --name cms-light-php-c -d --restart unless-stopped -p 80:80 cms-light-php:latest /bin/bash -c 'a2enmod rewrite; apache2-foreground'
