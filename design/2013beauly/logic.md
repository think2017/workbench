

# 最美经纪人逻辑设计

## 程序需要的cache

 * 1# 用户验证状态缓存 user_verify_cache
   * key:   guid
   * value: {phone:phone, time:verify_time}

 * 2# 用户投票时间缓存 poll_time_cache
   * key:   (手机用户) phone + brokerid  (微信用户) guid + brokerid
   * value: time()

 * 3# 经纪人得票数缓存 poll_number_cache
   * key:   brokerid
   * value: poll_number（票数）

 * 4# 9位最高得票数的经纪人id缓存 top_cache
   * key:   top_cache
   * value: brokerid,brokerid,brokerid...（经纪人id）

 * 5# 前十页经纪人id缓存 page_cache
   * key:   page_cache
   * value: brokerid,brokerid,brokerid...（经纪人id）

 * 6# 经纪人基本信息缓存 broker_info_cache
   * key:   broker_info_cache
   * value: json 经纪人页面所需的各种数据


## 投票逻辑

 * 验证部分

   * 用户初次投票，投票接口回返回code:-1，弹出手机验证窗体，提示用户验证手机。

   * 用户输入手机号，点击按钮，发起获取验证码请求，接口在得到请求后，会在检测所有条件符合规则后给用户手机发送验证码。

   * 用户拿到验证码后，输入手机号&验证码，点击投票，程序会调用验证接口，如果验证成功，记录用户验证状态缓存user_verify_cache


 * 投票部分
    
   * 用户验证通过，尝试读取poll_time_cache，如果取到，并将检查是否是当天投票？
     * 是，则视为对同一个经纪人的重复投票,返回code:-2，
     * 不是或者没取到，则去db投票日志表beautiful_broker_polls去查询，有当天日志，则返回code:-2。

   * 用户投票通过重复性检查，则记录用户投票日志guid、ip、phone、brokerid、poll_time、poll_type保存到queue中。
     
   * 更新经纪人得票数缓存 poll_number_cache，如果不存在，从db读，再生成缓存。

   * 更新记录用户投票时间缓存 poll_time_cache。

   * 返回code:1，前端将经纪人票数加1。



## JOB逻辑
 * ExchangeName : beauty_exchange
 * QueueName : beauty_queue

 * 逐条读取queue，将日志数据插入db.beautiful_broker_polls中，更新经纪人总票数到db.beautiful_broker_info。

 * 更新top_cache，判断当前的brokerid是否存在top_cache中？
   * 存在，则根据票数重新排序，
   * 不存在，则取该brokerid的票数与top_cache最后一位经纪人票数做比较，
   * 如果大于，则将其替换，小于或等于，不做任何操作。

 * 更新前三页page_cache
   首先移除page_cache中的brokerid，再将brokerid push到page_cache中，
   将page_cache平分10份，存储至10个cache中。page1_cache、page2_cache、page3_cache。。。


