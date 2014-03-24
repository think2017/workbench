
#### install rabbitmq
  * sudo apt-get install rabbitmq-server
  
  * vim /etc/init.d/rabbitmq-server
  
#### install management
  * sudo /usr/lib/rabbitmq/bin/rabbitmq-plugins enable rabbitmq_management
  
  * open: http://127.0.0.1:55672/
  * input: guest guest
