#!/bin/bash


function request() {

        DATE=$1

        ACTION=$2

        DATA=$(curl -s -XGET "http://10.0.10.93:9200/actiontj/$DATE/_search?search_type=count" -d "{\"query\":{\"bool\":{\"must\":[{\"term\":{\"action_name\":\"$ACT
ION\"}},{\"term\":{\"platform\":\"ios\"}}]}},\"aggs\":{\"result\":{\"cardinality\":{\"field\":\"order_name\"}}}}")

        echo $DATA | grep -E -o 'value.*([0-9]+)' | grep -E -o '[0-9]+'
}


for MONTH in {8..9}; do

        for DAY in {1..31}; do

                DATE="2016`printf '%02d' $MONTH``printf '%02d' $DAY`"

                R1=`request $DATE 'cashier'`
                R2=`request $DATE 'payment'`

                echo "$DATE    $R1    $R2"      
        done
done
