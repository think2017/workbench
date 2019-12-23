### install php73
* yum install epel-release
* yum install http://rpms.remirepo.net/enterprise/remi-release-7.rpm
* yum install yum-utils
* yum install -y php73-php-fpm php73-php-cli php73-php-bcmath php73-php-gd php73-php-json php73-php-mbstring php73-php-mcrypt php73-php-mysqlnd php73-php-opcache php73-php-pdo php73-php-pecl-crypto php73-php-pecl-mcrypt php73-php-pecl-geoip php73-php-recode php73-php-snmp php73-php-soap php73-php-xmll
* systemctl enable php73-php-fpm
* systemctl start php73-php-fpm
* find /etc/opt/remi/php73 -name php.ini
* sed -i 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/' /etc/opt/remi/php73/php.ini
* systemctl restart php73-php-fpm
* systemctl restart php73-php-fpm #重启
* systemctl start php73-php-fpm #启动
* systemctl stop php73-php-fpm #关闭
* systemctl status php73-php-fpm #检查状态
* php73 -v

### install Redis
* yum install redis
* yum install -y http://rpms.famillecollet.com/enterprise/remi-release-7.rpm
* yum --enablerepo=remi install redis
* service redis start
* systemctl start redis
* systemctl enable redis.service
