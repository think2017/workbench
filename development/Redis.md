
## install tcl8.6.0
 * wget http://prdownloads.sourceforge.net/tcl/tcl8.6.0-src.tar.gz
 * tar zxvf tcl8.6.0-src.tar.gz
 * cd tcl8.6.0/unix
 * ./configure
 * make && make install
 
 
## install redis server
 * wget http://redis.googlecode.com/files/redis-2.6.13.tar.gz
 * tar xzvf redis-2.6.13.tar.gz
 * cd mv redis
 * make && make install
 
 * app-get install redis-server
 
## install phpredis
 * svn checkout http://phpredis.googlecode.com/svn/trunk/ phpredis
 * cd phpredis
 * /usr/local/php/bin/phpize
 * ./configure --with-php-config=/usr/local/php/bin/php-config
 * make && make install
 

