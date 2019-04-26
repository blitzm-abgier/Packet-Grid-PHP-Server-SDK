#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" >/dev/null 2>&1 && pwd )"

java -jar "$DIR/../openapi-generator-cli.jar" generate \
  -i "https://api.packetgrid.io/api/docs/server.openapi.yaml" \
  -o "$DIR/sdk" \
  -g php

# Replace name in ./sdk/composer.json
original_composer_package_name='GIT_USER_ID\/GIT_REPO_ID'
new_composer_package_name='packet-grid/php-server-codegen'

sed -i "" "s|${original_composer_package_name}|${new_composer_package_name}|g" "$DIR/sdk/composer.json"
