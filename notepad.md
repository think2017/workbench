#### Ubuntu 刷新DNS 命令
  * sudo /etc/init.d/networking restart
 

#### shell 颜色设置
  * export PS1="\e[36m[\e[33;1m\u@\e[31;1m\h:\e[32;1m\w\e[36m] \e[33m\\$ \e[0m"
  * shell 颜色表示 
  * \e[31m 红色
  * \e[32m 绿色
  * \e[33m 黄色
  * \e[34m 蓝色
  * \e[31;1m 红色字体颜色高亮
  * 30~37是字体颜色、40~47是背景颜色


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

#### yum 更新 python 所需类库
  * yum -y install gcc gcc-c++ autoconf libjpeg libjpeg-devel libpng libpng-devel freetype freetype-devel libxml2 libxml2-devel zlib zlib-devel glibc glibc-devel bzip2 bzip2-devel ncurses ncurses-devel curl curl-devel e2fsprogs e2fsprogs-devel krb5 krb5-devel libidn libidn-devel openssl openssl-devel openldap openldap-devel nss_ldap openldap-clients openldap-servers sqlite-devel libaio libaio-devel


#### Samba 服务配置
  * sudo vim /etc/sysconfig/iptables
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 22 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 139 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 445 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 137 -j ACCEPT
  * -A INPUT -m state --state NEW -m tcp -p tcp --dport 138 -j ACCEPT
  * 
  * sudo vim /etc/sysconfig/selinux
  * SELINUX= disable
  

