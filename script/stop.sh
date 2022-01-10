#!/bin/bash

case $1 in
-p | "") param=$1 ;;
*)
    echo "Paramètre incorrect \"$1\"" >&2
    exit 1
    ;;
esac
shift

if [[ $# && ${param} == "-p" ]]; then
    cmd="-f ../docker/docker-compose-proxy.yml"
else
    cmd="-f ../docker/docker-compose.yml"
fi

set -x
docker-compose ${cmd} -p wilo stop
exit $?
