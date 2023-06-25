#!/bin/bash
sudo apt install php-fpm -y

#DNS
#host=$(hostname)

host=$(curl -s ifconfig.me)

nohup php -S $host:8000 >/dev/null 2>&1 &