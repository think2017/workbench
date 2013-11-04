用于ubuntu的默认源里面没有php5-amqp这个包，所以要用上amqp得考手动编译。

首先安装必须的php编译工具

sudo apt-get install php5-dev

安装rabbitmq的库
sudo apt-get install librabbitmq-dev

如果你的Linux发行版没有现成的librabbitmq-dev包，那么可以通过下载源码编译安装
然后如果你没有安装git话请安装一下git，因为我们要从官方的版本库中获取源代码
# 克隆源码并编译
git clone git://github.com/alanxz/rabbitmq-c.git
cd rabbitmq-c
git submodule init
git submodule update

# 编译库
autoreconf -i && ./configure && make && sudo make install

然后我们需要去下载php扩展的源代码，地址在此：http://pecl.php.net/package/amqp
当前最新版本为1.0.10
wget http://pecl.php.net/get/amqp-1.0.10.tgz
tar zxf amqp-1.0.10.tgz
cd amqp-1.0.10/
phpize && ./configure --with-amqp && make && sudo make install
如果报错
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
