### wget ImageMagick.tar.gz
  * sudo wget http://www.imagemagick.org/download/ImageMagick.tar.gz

### install
  * sudo tar -xzvf ImageMagick.tar.gz
  * cd ImageMagick-6.8.8-8/
  * ./configure --prefix=/usr/local/ImageMagick
  * sudo make
  * sudo make install
  * /usr/local/imagemagick/bin/convert -version

  * sudo apt-get install php5-dev  
  
### install PHP extension
  * sudo wget http://pecl.php.net/get/imagick-3.1.0RC1.tgz
  * sudo tar -zxvf imagick-3.1.0RC1.tgz
  * cd imagick-3.1.0RC1
  * sudo /usr/local/php/bin/phpize
  * sudo ./configure --with-php-config=/usr/local/php/bin/php-config  --with-imagick=/usr/local/ImageMagick
  * sudo make
  * sudo make install
  


### configure error:
  * sudo ln -s /usr/local/include/ImageMagick-6/ /usr/local/ImageMagick/include/ImageMagick
  * sudo ./configure --with-php-config=/usr/local/php/bin/php-config  --with-imagick=/usr/local/ImageMagick
