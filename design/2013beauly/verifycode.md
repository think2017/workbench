
# 手机验证码发送API

  * 地址：http://member.anjuke.com/memberapi/m?act=send_phone_code&server={server}&phone={phone}&ip={clientip}&custom={custom}

  * 参数说明：
    * {service}: 项目名
    * {clientip}: 客户端ip
    * {phone}: 手机号
    * {custom}: 自定义检测项值(guid、userid、cityid....)

  * 返回值说明： 
    * {code:1} 验证码发送成功
    * {code:0} 参数格式错误
    * {code:-1} 发送失败，同一手机号一天的最大发送验证码个数超过限制
    * {code:-2} 发送失败，同一ip一天最多向几个手机号发送验证码个数超过限制
    * {code:-3} 发送失败，同一{自定义字段}一天的最大发送验证码个数超过限制
 

# 手机验证码验证API

  * 地址：http://member.anjuke.com/memberapi/m?act=verify_phone_code&server={server}&phone={phone}&code={code}

  * 参数说明：
    * {service}: 项目名
    * {phone}: 手机号
    * {code}: 验证码

  * 返回值说明： 
    * {code:0} 参数格式错误
    * {code:1} 验证成功
    * {code:-1} 验证失败，验证码不正确
    * {code:-2} 验证失败，验证码不存在


# 配置项
 * @keys: ip_times_limit 同一手机号一天的最大发送验证码个数限制
 * @keys: ip_phone_limit 同一ip一天最多向几个手机号发送验证码个数限制
 * @keys: custom_phone_limit 同一{自定义字段}一天最多向几个手机号发送验证码个数限制
 * @keys: expiry_time 验证码失效时间
 * @keys: message 短信模板


# 逻辑说明
 * 根据各种配置项，每个配置项都有一个唯一的cache key，根据key获取存储的times，然后依次跟配置限制个数对比，超过限制直接返回错误状态码，

 * 各个条件检测都通过，然后再生成4位数字验证码，调用接口发送给用户手机。发送成功，将验证码存储至cache，有效期为一个小时。

 * 验证逻辑：根据phone读取cache，cache不存在或者验证码不对，都验证失败。


