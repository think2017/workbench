
### download jdk-8-linux-x64.tar.gz
  * sudo wget -O jdk-8-linux-x64.tar.gz http://download.oracle.com/otn-pub/java/jdk/8-b132/jdk-8-linux-x64.tar.gz
  * sudo tar zxvf jdk-8-linux-x64.tar.gz
  
### update-alternatives
  * sudo update-alternatives --install /usr/bin/java java /usr/lib/jvm/jdk1.8.0/bin/java 300
  * sudo update-alternatives --install /usr/bin/javac javac /usr/lib/jvm/jdk1.8.0/bin/javac 300
  * sudo update-alternatives --install /usr/bin/jps jps /usr/lib/jvm/jdk1.8.0/bin/jps 300
  
### config update-alternatives 
  * sudo update-alternatives --config java
  * sudo update-alternatives --config javac
  * sudo update-alternatives --config jps
  
  
### vim .bashrc
  * export JAVA_HOME=/usr/lib/jvm/jdk1.8.0
  * export JRE_HOME=${JAVA_HOME}/jre
  * export CLASSPATH=.:${JAVA_HOME}/lib:${JRE_HOME}/lib
  * export PATH=${JAVA_HOME}/bin:$PATH


