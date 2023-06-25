#!/bin/bash
sudo apt install php-fpm -y
host=$(hostname)
php -S $host:8000