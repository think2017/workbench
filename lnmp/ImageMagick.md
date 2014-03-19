

### wget ImageMagick.tar.gz
  * sudo wget ftp://ftp.u-aizu.ac.jp/pub/graphics/image/ImageMagick/imagemagick.org/ImageMagick.tar.gz

### install
  * sudo tar -xzvf ImageMagick.tar.gz
  * cd ImageMagick-6.7.1-6
  * ./configure -prefix=/usr/local/imagemagick -enable-lzw -with-modules
  * sudo make
  * sudo make install
  * /usr/local/imagemagick/bin/convert -version
  
  
### install PHP extension
  * sudo wget http://pecl.php.net/get/imagick-3.1.0RC1.tgz
  * sudo tar -zxvf imagick-3.1.0RC1.tgz
  * cd imagick-3.1.0RC1
  * phpize
  * sudo ./configure --with-php-config=/usr/local/php/bin/php-config
  * sudo make
  * sudo make install
  
