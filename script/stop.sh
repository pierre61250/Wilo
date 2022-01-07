#!/bin/bash 
set -x
docker-compose -f ../docker/docker-compose-proxy.yml stop $@
exit $?