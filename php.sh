#!/bin/sh
docker-compose exec php-docker php "$@"
return $?

chmod +x php.sh