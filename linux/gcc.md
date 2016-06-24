
### 安装gcc-4.8
 * wget http://ftp.yz.yamagata-u.ac.jp/pub/GNU/gmp/gmp-5.1.2.tar.lz
 * wget http://www.mpfr.org/mpfr-current/mpfr-3.1.4.tar.gz
 * wget http://www.multiprecision.org/mpc/download/mpc-1.0.tar.gz
 * wget http://ftp.tsukuba.wide.ad.jp/software/gcc/releases/gcc-4.8.1/gcc-4.8.1.tar.gz
 
 * yum install lzip
 * lzip -d gmp-5.1.2.tar.lz
 * tar -xvf gmp-5.1.2.tar
 * cd gmp-5.1.2
 * ./configure --prefix=/usr/local/gmp
 * make && make install

* cd ..
* tar zxvf mpfr-3.1.4.tar.gz
* cd mpfr-3.1.4
* ./configure --prefix=/usr/local/mpfr
* make && make install

* cd ..
* tar zxvf mpc-1.0.tar.gz 
* ./configure --prefix=/usr/local/mpc --with-mpfr=/usr/local/mpfr --with-gmp=/usr/local/gmp
 
* cd ..
* tar zxvf gcc-4.8.1.tar.gz
* ./configure --prefix=/usr/local/gcc --with-mpfr=/usr/local/mpfr --with-gmp=/usr/local/gmp --with-mpc=/usr/local/mpc
* make && make install
