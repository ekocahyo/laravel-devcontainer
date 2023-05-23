#!/usr/bin/env bash

set -o allexport
source .env
set +o allexport

chown -R $WWWUSER:$WWWGROUP /var/www/html
