#!/bin/bash 
set -x
docker exec -it symfony bash $@
exit $?