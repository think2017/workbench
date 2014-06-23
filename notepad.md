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
  

