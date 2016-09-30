#!/bin/bash

function monitor() {
        ARGV=$1

        PRO=$(ps aux|grep $ARGV)
        PID=(`echo $PRO|grep -E -o 'root ([0-9]+)' | grep -E -o '[0-9]+'`)
        LEN=${#PID[@]}

        if [ $LEN -le 1 ]
        then
                cd /mnt/www/actiontj.fruitday.com
                nohup /usr/bin/php index.php ElasticSearch run_redis > /tmp/run_redis.out 2>&1 &
                echo "Starting run_redis process ..."
        fi
}


echo `monitor 'run_redis'`

#IFS=' '
#IDS=($PID)

#for id in ${IDS[@]}
#do
#       echo "$id"
#done
