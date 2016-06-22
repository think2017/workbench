

## 查看php-fpm进程id
 * ps aux | grep php-fpm 
 * cat /usr/local/php/var/run/php-fpm.pid
 

## 查看php-fpm进程数
 * ps aux | grep -c php-fpm


## php-fpm 信号控制
 * INT, TERM 立刻终止
 * QUIT 平滑终止
 * USR1 重新打开日志文件
 * USR2 平滑重载所有worker进程并重新载入配置和二进制模块


## 设置php-fpm 查看运行状态路径
 * pm.status_path = /status
 * http://127.0.0.1/status

## 设置超时时间
 *　request_terminate_timeout　＝ 300s

## php-fpm 关闭
 * kill -INT `cat /usr/local/php/var/run/php-fpm.pid`


## php-fpm 重启
 * kill -USR2 `cat /usr/local/php/var/run/php-fpm.pid`
