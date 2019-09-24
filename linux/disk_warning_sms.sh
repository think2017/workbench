#!/bin/bash
phpbin="/usr/bin/php"
webenter="/mnt/scripts/disk_warning_sms.php"
servicename=$1
partition_list=(`df -h | awk 'NF>3&&NR>1{sub(/%/,"",$(NF-1));print $NF,$(NF-1)}'`)
critical=90
notification_sms()
{
    `$phpbin "$webenter" "aws disk warning $servicename"`
}
crit_info=""
for (( i=0;i<${#partition_list[@]};i+=2 ))
do
    if [ "${partition_list[((i+1))]}" -lt "$critical" ];then
        echo "OK! ${partition_list[i]} used ${partition_list[((i+1))]}%"
    else
            if [ "${partition_list[((i+1))]}" -gt "$critical" ];then
                crit_info='warning'
            fi
    fi
done
if [ "$crit_info" != "" ];then
    notification_sms
fi
