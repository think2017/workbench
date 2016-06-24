
### 安装gcc-4.8
 * wget https://gmplib.org/download/gmp/gmp-6.1.1.tar.lz
 * wget http://ftp.tsukuba.wide.ad.jp/software/gcc/releases/gcc-4.8.1/gcc-4.8.1.tar.gz
 
 * yum install lzip
 * lzip -d gmp-6.1.1.tar.lz
 * tar -xvf gmp-6.1.1.tar
 * cd gmp-6.1.1
 * ./configure --prefix=/usr/local/gmp
 * make && make install
