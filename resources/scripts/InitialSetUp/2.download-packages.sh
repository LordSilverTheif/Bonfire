#!/bin/bash
sudo apt update && sudo apt upgrade -y
sudo apt install mysql-server -y
sudo apt install apache2 -y
sudo apt-add-repository ppa:ondrej/php -y
sudo apt update && sudo apt upgrade -y
sudo apt install php8.2 php8.2-mysql php8.2-curl -y
