FROM php:8.3-apache
RUN apt-get update && apt-get install -y git unzip mariadb-client
RUN docker-php-ext-install mysqli
RUN printf '[client]\nhost=127.0.0.1\nuser=student\npassword=Kalafior_Rower_57x\ndatabase=strona\n' > /root/.my.cnf
