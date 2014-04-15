
#数据库设计

## 选手信息表 beautiful_broker_info

  *  主键            id           int(11)
  *  经纪人id        brokerid     int(11)
  *  图像            photo        char(32)
  *  美丽宣言        title        varchar(60)
  *  票数            poll_number  int(11)
  *  参赛时间        join_time    datetime
  *  通过审核时间    verify_time  datetime
  *  最后投票时间    last_time    int(11) 索引
  *  是否通过审核    is_verify    tinyint(1) {0:未审核，1:通过审核，2:未通过审核}
  *  是否被禁        is_forbid    tinyint(1) {0:未禁，1:禁赛}

 * 常用SQL
  * SELECT `id`,`brokerid`,`photo`,`title`,`poll_number` FROM `beautiful_broker_info` WHERE `brokerid` = :brokerid LIMIT 1;
  * UPDATE `beautiful_broker_info` SET `photo` = :photo, `title` = :title, `last_time` = :last_time WHERE `brokerid` = :brokerid;
  * INSERT INTO `beautiful_broker_info` (`id`, `brokerid`, `photo`, `title`, `poll_number`, `join_time`, `verify_time`, `last_time`, `is_verify`, `is_forbid`)
	VALUES('', :brokerid, :photo, :title, 0, :join_time, '', :last_time, 0, 0);
  * SELECT `brokerid`,`photo`,`title`,`poll_number` FROM `beautiful_broker_info` WHERE `is_verify` = 1 AND `is_forbid` = 0 ORDER BY last_time DESC LIMIT 0,20;
  


## 选手个人经历表 beautiful_broker_contents

  *  主键            id          int(11)
  *  个人经历        content     varchar(1500)

 * 常用SQL
  * SELECT `id`,`content` FROM `beautiful_broker_contents` WHERE `id` = :id;
  * UPDATE `beautiful_broker_contents` = :content WHERE `id` = :id;
  * INSERT INTO `beautiful_broker_contents` (`id`, `content`) VALUES(:id, :content);
   

## 相册表 beautiful_broker_albums

  *  主键        id              int(11)
  *  经纪人id    brokerid        int(11)
  *  hostid      hostid          tinyint(1)
  *  图片id      imageid         char(32)
  *  排序索引    sort            int(11)
  *  是否为封面  is_cover        tinyint(1) {0:no，1:yes}

 * 常用SQL
  * SELECT `id`, `brokerid`, `hostid`, `imageid`, `sort`, `is_cover` FROM `beautiful_broker_albums` WHERE `brokerid` = :brokerid LIMIT 8
  * DELETE FROM `beautiful_broker_albums` WHERE `brokerid` = :brokerid;


## 投票日志表 beautiful_broker_polls

  *  主键          id              int(11)
  *  经纪人id      brokerid        int(11)
  *  投票用户id    userid          int(11)
  *  投票用户guid  guid            char(36)
  *  用户ip        ip              char(15)
  *  投票时间      poll_time       datetime
  *  投票类型      poll_type       tinyint(1) {1:网站，2:微信}

