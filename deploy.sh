#!/bin/bash

docker stop php-container || true
docker rm php-container || true

docker pull 319332498304.dkr.ecr.us-east-1.amazonaws.com/php-app:latest

docker run -d -p 80:80 --name php-container 319332498304.dkr.ecr.us-east-1.amazonaws.com/php-app:latest
