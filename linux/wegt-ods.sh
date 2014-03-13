#!/bin/bash

cd ./log

for day in {1..28}; do
  for hour in {0..23}; do
    file="http://ods10-005:50075/streamFile%2Fapplog%2Fanjuke.register_login%2F201402`printf '%02d' $day`%2F`printf '%02d' $hour`.log"
    wget -c $file -O `printf '201402_%02d_%02d.log' $day $hour`
    echo "$file download complete!"
  done
done
