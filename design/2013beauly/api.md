
# 最美经纪人API


## 手机验证码发送API

  * 地址：http://topic.anjuke.com/2013beauty/send_code/{phone}

  * 参数说明：
    * {phone}: 手机号

  * 返回值说明（JSON）： 
    * {code:1} 验证码发送成功
    * {code:0} 参数格式错误
    * {code:-1} 发送失败，同一手机号一天的最大发送验证码个数超过限制
    * {code:-2} 发送失败，同一ip一天最多向几个手机号发送验证码个数超过限制
    * {code:-3} 发送失败，同一{自定义字段}一天的最大发送验证码个数超过限制
 

## 手机验证码验证API

  * 地址：http://topic.anjuke.com/2013beauty/verify_code/{phone}/{code}

  * 参数说明：
    * {phone}: 手机号
    * {code}: 验证码

  * 返回值说明（JSON）： 
    * {code:0} 参数格式错误
    * {code:1} 验证成功
    * {code:-1} 验证失败，验证码不正确
    * {code:-2} 验证失败，验证码不存在



## 手机投票API(二期)
 * 手机投票接口
  * 地址：http://topic.anjuke.com/2013beauty/phone_poll/{id}/
  * 参数说明：{brokerid}: 经纪人id
  * 返回值说明（JSON）： 
    * {'code':1, 'msg':"投票成功!"}
    * {'code':0, 'msg':"参数错误!"}
    * {'code':-1, 'msg':"用户未验证"}
    * {'code':-2, 'msg':"每位用户一天只能对同一位报名人投一次票，明天再来投票吧~"}
    * {'code':-3, 'msg':"投票失败"}


## 微信投票API(二期)
   * 地址： http://topic.anjuke.com/2013beauty/weixin_poll/{id}/{guid}
   * 参数说明： 
     * {id}: 参赛选手id
     * {guid}: 微信用户guid

   * 返回值说明（JSON）： 
     * {'code':1, 'msg':"投票成功!"}
     * {'code':0, 'msg':"参数错误!"}
     * {'code':-1, 'msg':"您投票的选手不存在!"}
     * {'code':-2, 'msg':"每位用户一天只能对同一位报名人投一次票明天再来投票吧~"}
     * {'code':-3, 'msg':"投票失败!"}



## 报名接口设计(一期)
  * 报名表单（POST）
   * url http://topic.anjuke.com/2013beauty/join
   * 参数：
      * title：美丽宣言
      * content：个人经历
      * files：用户上传的图片url
       * file[0][host] 图片hostid
       * file[0][id] 图片imageid
       * file[0][main] 是否为封面

