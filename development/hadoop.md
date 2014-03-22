#### install maven
  * sudo apt-get install maven
  
#### install cmake
  * sudo apt-get install cmake


#### install native library
  * sudo wget https://protobuf.googlecode.com/files/protobuf-2.5.0.tar.gz
  * sudo tar zxvf protobuf-2.5.0.tar.gz
  * cd protobuf-2.5.0
  * sudo ./configure --prefix=/usr
  * sudo make
  * sudo make install


#### install hadoop-2.2.0
  * sudo wget http://mirrors.cnnic.cn/apache/hadoop/common/hadoop-2.2.0/hadoop-2.2.0-src.tar.gz
  * mvn package -Pdist,native -DskipTests -Dtar


#### install hadoop-2.3.0
  * sudo wget http://apache.org/dist/hadoop/core/hadoop-2.3.0/hadoop-2.3.0-src.tar.gz
  * mvn install -DskipTests


##### [ERROR] Failed to execute goal org.apache.maven.plugins:maven-antrun-plugin:1.6:run (create-testdirs) on project hadoop-project: Error executing ant tasks: /home/sreejith/svn/hadoop-trunk/hadoop-project/target/antrun/build-main.xml (No such file or directory) -> [Help 1]

  * sudo chown -R kenku:kenku /usr/src/hadoop-2.3.0-src
