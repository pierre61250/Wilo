#!/bin/bash 
set -x
docker-compose -f ../docker/docker-compose-proxy.yml -p wilo down $@
exit $?