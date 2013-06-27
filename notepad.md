

# 编译安装php5.4

* libiconv扩展
wget http://ftp.gnu.org/pub/gnu/libiconv/libiconv-1.13.1.tar.gz
tar -zxvf libiconv-1.13.1.tar.gz
cd libiconv-1.13.1
./configure --prefix=/usr/local/libiconv
make && make install

./configure --prefix=/usr/local/php --with-apxs2=/usr/local/apache/bin/apxs --with-libxml-dir=/usr/include/libxml2 --with-config-file-path=/usr/local/php/etc/ --with-mysql --with-mysqli --with-gd --enable-gd-native-ttf --with-zlib --with-mcrypt --with-pdo-mysql --enable-shmop --enable-soap --enable-sockets --enable-wddx --enable-zip --with-xmlrpc --enable-fpm --enable-mbstring --with-zlib-dir --with-bz2 --with-curl --enable-exif --enable-ftp --with-jpeg-dir --with-png-dir --with-freetype-dir --with-iconv=/usr/local/libiconv --enable-xml --enable-bcmath --enable-sysvsem

make && make install


# vim 编辑器命令
u 撤销上一步的操作
Ctrl+r 恢复上一步被撤销的操作
5yy 复制5行
5dd 剪切5行
:set number 显示行号
:set nonumber 关闭行号
:set fileformat? 显示文件格式
:set fileformat=unix 设置文件格式为unix

http://www.cnblogs.com/moonz-wu/archive/2008/01/29/1058082.html


# 通过which命令查找java目录
$ which java
/usr/bin/java
$ ls -l /usr/bin/java
/usr/bin/java -> /etc/alternatives/java
$ ls -l /etc/alternatives/java
/etc/alternatives/java -> /usr/lib/jvm/java-6-openjdk-amd64/jre/bin/java

/usr/lib/jvm/java-6-openjdk-amd64 即是java目录


# 更新软件源
sudo gedit /etc/apt/sources.list
sudo apt-get update


# 安装hadoop
http://www.devsniper.com/ubuntu-12-04-install-sun-jdk-6-7/
http://www.michael-noll.com/tutorials/running-hadoop-on-ubuntu-linux-single-node-cluster/


# 终端启动程序在后台运行
nohup commod &


# 安装 zend studio
http://hi.baidu.com/wan_zk/item/3163e2008ce9ea14cd34ea24


#ubuntu默认启用了密码环
sudo rm -rf ~/.gnome2/keyrings/


# ubuntu下安装phpunit
sudo apt-get remove phpunit 
sudo pear channel-discover pear.phpunit.de 
sudo pear channel-discover pear.symfony-project.com 
sudo pear channel-discover components.ez.no 
sudo pear update-channels 
sudo pear upgrade-all 
sudo pear install --alldeps phpunit/PHPUnit 
sudo pear install --force --alldeps phpunit/PHPUnit


# git 插件shell脚本
vim /etc/bash_completion.d/git
vim /home/kenku/.bashrc
