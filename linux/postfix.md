
## install postfix
* service sendmail stop
* rpm -qa | grep sendmail | xargs rpm -e
* rpm -qa | grep postifx
* yum install postfix

## config
* vim /etc/postfix/main.cf

## DNS
* 主机 @
* 记录类型 MX
* 记录值 xxx.xxx.xxx.xxx

## User
* useradd -s /sbin/nologin hr

## TEST
* tail -n 50 -f /var/log/maillog
* echo "Mail Content" | mail -s "Mail Subject" hr@51buycar.com
