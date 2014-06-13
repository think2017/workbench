#### Ubuntu 刷新DNS 命令
  * sudo /etc/init.d/networking restart
 

#### windows 刷新DNS 命令
  * ipconfig /flushdns


#### git 使用当前版本的代码
  * git co app-user-touch/page/user/touch/anjuke/property/View.js --ours
  

#### git 使用master版本的代码
  * git co app-user-touch/page/user/touch/anjuke/property/View.js --theirs


#### git 撤销一次提交
  * git revert HEAD
  * git revert HEAD^  
  * git revert fa042ce57ebbe5bb9c8db709f719cec2c58ee7ff


#### Samab 服务配置
  * sudo vim /etc/sysconfig/iptables
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 22 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 139 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 445 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 137 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 138 -j ACCEPT
  * 
  * sudo vim /etc/sysconfig/selinux
  * SELINUX= disable
  

