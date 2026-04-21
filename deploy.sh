#!/bin/bash

docker stop $(docker ps -q) || true
docker rm $(docker ps -aq) || true

docker pull 319332498304.dkr.ecr.us-east-1.amazonaws.com/php-app:latest

docker run -d -p 80:80 319332498304.dkr.ecr.us-east-1.amazonaws.com/php-app:latest
