用于ubuntu的默认源里面没有php5-amqp这个包，所以要用上amqp得考手动编译。

## install php5-dev
 * sudo apt-get install php5-dev

## install librabbitmq-dev
 * sudo apt-get install librabbitmq-dev


## git clone 
 * git clone git://github.com/alanxz/rabbitmq-c.git
 * cd rabbitmq-c
 * git submodule init
 * git submodule update

## configure 
* autoreconf -i && ./configure 
* make && sudo make install

## install php-ext
 * wget http://pecl.php.net/get/amqp-1.0.10.tgz
 * tar zxvf amqp-1.0.10.tgz
 * cd amqp-1.0.10/ 
 * /usr/local/php/bin/phpize
 * ./configure --with-amqp
 * make && sudo make install
 * 
 
## 错误处理
/root/amqp-1.0.9/amqp_queue.c: In function ‘read_message_from_channel’:
/root/amqp-1.0.9/amqp_queue.c:341:11: error: ‘AMQP_FIELD_KIND_U64’ undeclared (first use in this function)
/root/amqp-1.0.9/amqp_queue.c:341:11: note: each undeclared identifier is reported only once for each function it appears in
/root/amqp-1.0.9/amqp_queue.c: In function ‘zim_amqp_queue_class_nack’:
/root/amqp-1.0.9/amqp_queue.c:1093:2: error: unknown type name ‘amqp_basic_nack_t’
/root/amqp-1.0.9/amqp_queue.c:1113:3: error: request for member ‘delivery_tag’ in something not a structure or union
/root/amqp-1.0.9/amqp_queue.c:1114:3: error: request for member ‘multiple’ in something not a structure or union
/root/amqp-1.0.9/amqp_queue.c:1115:3: error: request for member ‘requeue’ in something not a structure or union
/root/amqp-1.0.9/amqp_queue.c:1120:3: error: ‘AMQP_BASIC_NACK_METHOD’ undeclared (first use in this function)
make: *** [amqp_queue.lo] Error 1

是因为默认的librabbitmq-dev发行版的包比较旧，用上面git方式编译安装最新即可。
最后一步创建配置文件

sudo echo "extension = amqp.so" > /etc/php5/conf.d/amqp.ini

重启web服务器在phpinfo页面中看到以下内容说明安装好了
