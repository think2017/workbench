
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
    
    
#### Install Tomcat
  * install
    * wget http://apache.fayea.com/tomcat/tomcat-7/v7.0.57/bin/apache-tomcat-7.0.57.tar.gz
    * tar zxvf apache-tomcat-7.0.57.tar.gz 
    * mv ./apache-tomcat-7.0.57/ /opt/app/tomcat
    
  * add iptables port
    * iptables -A INPUT -p tcp --dport 8080 -j ACCEPT
    * service iptables restart
    
  * start Tomcat
    * /opt/app/tomcat/bin/startup.sh 

#### Install php-java-bridge
  * install
    * wget http://nchc.dl.sourceforge.net/project/php-java-bridge/RHEL_FC%20SecurityEnhancedLinux/php-java-bridge_5.5.4.1/php-java-bridge_5.5.4.1.tar.gz
    * tar zxvf php-java-bridge_5.5.4.1.tar.gz
    * mv ./php-java-bridge_5.5.4.1/ /opt/app/php-java-bridge
    * cd /opt/app/php-java-bridge
    * /opt/app/php/bin/phpize
    * ./configure --with-java=$JAVA_HOME --with-php-config=/opt/app/php/bin/php-config
    * make
    * make test & make insatll
    
  * edit php.ini
    * vim /opt/app/php/etc/php.ini
    * extension = "java.so"
    
  * Verify installation
    * php -i|grep "java"
    
  * add JavaBridge
    * wget http://nchc.dl.sourceforge.net/project/php-java-bridge/Binary%20package/php-java-bridge_6.2.1/exploded/JavaBridge.jar
    * mv ./JavaBridge.war /opt/app/tomcat/webapps/
    * /opt/app/tomcat/bin/shutdown.sh 
    * /opt/app/tomcat/bin/startup.sh 
