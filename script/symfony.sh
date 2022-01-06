#!/bin/bash 
set -x
docker exec -it docker_symfony_1 bash $@
exit $?