#!/bin/bash

log_path="/mnt/logs/nginx/"

pid_path="/var/run/nginx.pid"

mv ${log_path}pay.fruitday.com.access.log ${log_path}pay.fruitday.com.access_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}pay.fruitday.com.error.log ${log_path}pay.fruitday.com.error_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}awspay.fruitday.com.access.log ${log_path}awspay.fruitday.com.access_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}awspay.fruitday.com.error.log ${log_path}awspay.fruitday.com.error_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}actiontj.fruitday.com.access.log ${log_path}actiontj.fruitday.com.access_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}actiontj.fruitday.com.error.log ${log_path}actiontj.fruitday.com.error_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}active.fruitday.com.access.log ${log_path}active.fruitday.com.access_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}active.fruitday.com.error.log ${log_path}active.fruitday.com.error_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}access.log ${log_path}access_$(date -d "yesterday" +"%Y%m%d").log
mv ${log_path}error.log ${log_path}error_$(date -d "yesterday" +"%Y%m%d").log
