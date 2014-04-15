
## 记录用户访问行为数据到消息队列


### 地址
  * http://user.anjuke.com/vppvQueue/?id={:id}&type={:type}
  

### 参数
  * :id   页面id
  * :type 页面类型


### 页面类型
  * site:1
    * 1 - 新房
        * 1101 - 房源(暂时不用)
        * 1102 - 新盘
    * 2 - 二手房
        * 1201 - 房源
        * 1202 - 小区(暂时不用)
    * 3 - 租房
        * 1301 - 房源
        * 1302 - 小区(暂时不用)
    * 4 - 写字楼
        * 1401 - 房源
        * 1402 - 楼盘(暂时不用)
    * 5 - 商铺
        * 1501 - 房源
        * 1502 - 楼盘(暂时不用)
  * pad:2
  * app:3
  * touchweb:4


### 逻辑
  * 参数id、type如果为空，直接return -1。
  * type的值不存在定义列表，直接return -2。
  * GUID为空不记录日志，直接return -3。

  * 将以下访问数据发送到Queue，Example：
    * $log['type'] = 1101;
    * $log['time'] = 1395738621;
    * $log['pageid'] = 207971667;
    * $log['userid'] = 112312156;
    * $log['guid'] = 'A58C15F4-8124-F5D0-A744-5AE36EFE7C3C';
    * $log['ip'] = '192.168.190.126';

  * 发送成功，return 1。


### 消息队列(RabbitMQ)
    * Exchange Type：Direct
    * 模式：一个生产者，多个消费者。

