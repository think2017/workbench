
## PHP-Java-Bridge 环境搭建


#### Service Info
  * OS: CentOS release 6.4 (Final)
  * PHP Version: PHP 5.3.17
  * Apache Version: Apache/2.2.15 (Unix)
  
  
#### Need Install
  * JDK 
  * Apache Tomcat
  * php-java-bridge
  
  
#### Install JDK
  * Version：1.7.0_75
  
  * Download
    * Url: http://www.oracle.com/technetwork/java/javase/downloads/jdk7-downloads-1880260.html
    * Version: jdk-7u75-linux-x64.tar.gz
    
  * install
    * tar zxvf jdk-7u75-linux-x64.tar.gz
    * mv ./jdk1.7.0_75/ /opt/app/jdk7
    
  * edit /etc/profile
    * vim /etc/profile
    * export JAVA_HOME=/opt/app/jdk7
    * export PATH=$JAVA_HOME/bin:/opt/app/php/bin:$PATH
    * export CLASSPATH=.:$JAVA_HOME/lib/dt.jar:$JAVA_HOME/lib/tools.jar
    
  * add symbolic link
    * ln -s /usr/bin/java /opt/app/jdk7/jre/bin/java
    * ln -s /usr/bin/javac /opt/app/jdk7/jre/bin/javac
    
  * Verify installation
    * source /etc/profile
    * java -version
    
    
