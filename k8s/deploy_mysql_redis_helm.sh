#!/bin/bash

if ! command -v helm &> /dev/null
then
    echo "helm tool not found, please install it first and try again."
    exit
fi
dbname=`cat ./app_config.yaml | grep -i "DB_DATABASE:" | awk {'print $2'}`
dbuser=`cat ./app_config.yaml | grep -i "DB_USERNAME:" | awk {'print $2'}`
dbpass=`cat ./app_secret.yaml | grep -i "DB_PASSWORD:" | awk {'print $2'} | base64 -d`
rdispass=`cat ./app_secret.yaml | grep -i "REDIS_PASS:" | awk {'print $2'} | base64 -d`
helm repo add bitnami https://charts.bitnami.com/bitnami

echo "Executing..."
echo "helm install mysql bitnami/mysql --set auth.database=$dbname --set auth.username=$dbuser --set auth.password=$dbpass"

helm install mysql bitnami/mysql --set auth.database="$dbname" --set auth.username="$dbuser" --set auth.password="$dbpass"

helm install redis bitnami/redis --set auth.password="$rdispass"