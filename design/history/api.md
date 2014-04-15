
## 用户中心浏览历史API


### 获取用户浏览历史房源id
  * URL:  http://user.anjuke.com/getHistory/?type=:type&limit=:limit&start=:start&userid=:userid&guid=:guid

  * Params: 
    * :type，  页面类型id
    * :start， 房源id起始index,默认值：0
    * :limit， 需要获取的房源id数量
    * :userid，指定用户id
    * :guid，  指丁GUID

  * 返回值json：
    * 请求成功(code=1)
    * {"code":1,"total":3,"data":[{"id":"2075265127","time":1396489709},{"id":"2075265125","time":1396489707},{"id":"2075265123","time":1396489705}]}   
    * 参数错误(code=-1)
    * {"code":"-1","error":"Guid and Userid is invalid"}  
    * 参数错误(code=-2)
    * {"code":"-2","error":"Parameter type error"}
    * 参数错误(code=-3)
    * {"code":"-3","error":"Parameter limit error"}
    * 请求失败(code=0)
    * {"code":"0","error":"history is empty","self":"HU_101:8961528"} 





### 删除多条用户浏览历史
  * URL： http://user.anjuke.com/delHistory/?action=delete&ids=:ids&type=:type

  * Params: 
    * :action，执行方法
    * :type，页面类型
    * :ids，房源id，多个id用,隔开 123,124,125

  * 返回值json：
    * 删除成功(code=1)
    * {"code":1}   
    * 参数错误(code=-1)
    * {"code":"-1","error":"Guid and Userid is invalid"}  
    * 参数错误(code=-2)
    * {"code":"-2","error":"Parameter type error"}
    * 参数错误(code=-3)
    * {"code":"-3","error":"ids is invalid"}
            



### 清空用户浏览历史
  * URL： http://user.anjuke.com/delHistory/?action=delete_all&uid=:uid&type=:type

  * Params: 
    * :action，执行方法
    * :type，页面类型
    * :uid，用户id

  * 返回值json：
    * 删除成功(code=1)
    * {"code":1}   
    * 参数错误(code=-1)
    * {"code":"-1","error":"Guid and Userid is invalid"}  
    * 参数错误(code=-2)
    * {"code":"-2","error":"Parameter type error"}
    * 参数错误(code=-3)
    * {"code":"-3","error":"uid is invalid"}
