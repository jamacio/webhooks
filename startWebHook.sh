#!/bin/bash
sudo apt install php-fpm -y

#DNS
#host=$(hostname)

host=$(curl -s ifconfig.me)

php -S $host:8000