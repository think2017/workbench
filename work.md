
###用户中心部分


####用户中心WIKI（HOME Index）
  * http://wiki.corp.anjuke.com/%E7%94%A8%E6%88%B7%E4%B8%AD%E5%BF%83API


####公共手机验证码服务
  * 发送手机验证码wiki地址：http://wiki.corp.anjuke.com/index.php?title=Member_send_phone_code
  * 验证手机验证码wiki地址：http://wiki.corp.anjuke.com/index.php?title=Member_verify_phone_code
  * 配置文件：app-member/config/phone.php


####释放普通用户的手机号 
  * 接口文档地址：http://wiki.corp.anjuke.com/index.php?title=Member_release_user_phone

####订阅用户自动注册
  * http://git.corp.anjuke.com/aifang/design-doc/browse/master/user.anjuke.com/register/%E8%AE%A2%E9%98%85%E6%B3%A8%E5%86%8C.md


####浏览历史文档
  * API文档： http://git.corp.anjuke.com/aifang/design-doc/browse/master/user.anjuke.com/history/api.md
  * 设计文档：http://git.corp.anjuke.com/aifang/design-doc/browse/master/user.anjuke.com/history/history.md
  * 消息队列：http://git.corp.anjuke.com/aifang/design-doc/browse/master/user.anjuke.com/history/vppvqueue.md


####用户注册来源config
  * 配置文件：app-member-public/config/login.php
  * KEY：register_from


####用户登录数据同步(收藏、浏览历史)

  * 同步收藏: $this->sync_favorite($uid);
  * 同步浏览历史: $this->sync_history($uid);


####ODS登录注册日志
  * URL: http://ods.corp.anjuke.com/
  * KEY: anjuke.register_login
  * Download Simple Shell: https://github.com/think2017/workbench/blob/master/linux/wget-ods.sh

####用户中心 用户登录IP黑名单
  * URL: http://optools.anjuke.com
  * KEY: Member_Login_Iptables


####房贷计算器optools
  * URL: http://optools.anjuke.com
  * KEY: calculator_loan

####发送到手机optools
  * URL: http://optools.anjuke.com
  * KEY: SMT_SP_%

####EDM optools
  * URL: http://optools.anjuke.com
  * KEY: edm_email_%


####线上JOBs
  * vppvQueue守护进程：http://job.corp.anjuke.com/job/form.php?id=775
  * 最美经纪人Queue守护进程：http://job.corp.anjuke.com/job/form.php?id=774
  * edm 邮件推送：http://job.corp.anjuke.com/job/form.php?id=749
  * 晶赞广告项目#1：http://job.corp.anjuke.com/job/form.php?id=737
  * 晶赞广告项目#2：http://job.corp.anjuke.com/job/form.php?id=739
  * 晶赞广告项目#3：http://job.corp.anjuke.com/job/form.php?id=741
  * 小区变价房源邮件通知：http://job.corp.anjuke.com/job/form.php?id=731
  * 小区新房源短信通知：http://job.corp.anjuke.com/job/form.php?id=730
  * 小区新房源邮件通知：http://job.corp.anjuke.com/job/form.php?id=729



````````````````````````````````我是分割线````````````````````````````````


###TouchWeb部分

####TouchWeb推荐API
  * 搜索零结果推荐(无命中小区)
   * app-user-touch/controller/user/touch/anjuke/list/RecSearchAjax.php
   * http://m.anjuke.com/ajax/rec/search?from=listpage&page=1&page_size=20&__REQU_SESSION_ID=REF-271A76F3-DC47-4843-A2D0-D799041B9D0E

  * 搜索零结果推荐(命中小区)
   * app-user-touch/controller/user/touch/anjuke/list/RecSearchAjax.php
   * http://m.anjuke.com/ajax/rec/search?from=listpage&page=1&page_size=20&com_name=%E4%B8%96%E8%8C%82%E6%BB%A8%E6%B1%9F%E8%8A%B1%E5%9B%AD&__REQU_SESSION_ID=REF-F3E1C99D-FA27-4DB0-A8EF-B7C650D17374

  * 筛选零结果推荐
   * app-user-touch/controller/user/touch/anjuke/list/RecSelectAjax.php
   * http://m.anjuke.com/ajax/rec/select/pudong-zhoupu/a0_500000-b5-x-x-0?s=m&page=1&page_size=20&area_id=7&block_id=8951&__REQU_SESSION_ID=REF-F3E1C99D-FA27-4DB0-A8EF-B7C650D17374


####TouchWeb列表页API
  * 新房好盘直通车推荐ajax接口
   * app-user-touch/controller/user/touch/anjuke/list/RecXinfangAjax.php
   * http://m.anjuke.com/ajax/rec/xinfang?region_title=%E6%B5%A6%E4%B8%9C&priceRange=200-250&htNum=0

  * 下拉词联想ajax
   * app-user-touch/controller/user/touch/anjuke/list/SuggestAjax.php
   * http://m.anjuke.com/ajax/suggest?q=%E6%B5%A6%E4%B8%9C&limit=6


####TouchWeb二手房SEO
  * SEO API(租房SEO调用)
   * app-user-touch/controller/user/touch/anjuke/seo/List.php
   * http://m.anjuke.com/seo/list?search_id=128040&city_id=11

  * 二手房SEO
   * 类文件：app-user-touch/classes/user/touch/list/process/ListSeoProcess.php
   * 模板文件：app-user-touch/page/user/touch/anjuke/list/ListSeoAjax.php


```````````````````````````````` End ````````````````````````````````
