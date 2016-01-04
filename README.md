
#手机号评分服务接口文档

###参数

<table>
    <tr>
        <td>参数名</td>
        <td>数据类型</td>
        <td>是否必须</td>
        <td>说明</td>
    </tr>
    <tr>
        <td>mobile</td>
        <td>char(11)</td>
        <td>Y</td>
        <td>需要评分的手机号</td>
    </tr>
    <tr>
        <td>from</td>
        <td>varchar(10)</td>
        <td>Y</td>
        <td>业务来源标识</td>
    </tr>
    <tr>
        <td>order_id</td>
        <td>char(13)</td>
        <td>N</td>
        <td>保留字段，订单号</td>
    </tr>
    <tr>
        <td>refresh</td>
        <td>bool</td>
        <td>N</td>
        <td>是否需要强制刷新评分，默认false</td>
    </tr>
</table>

###返回参数

  **格式：JSON

  **状态码：code
  
   <table>
   <tr>
   <td>值</td>
   <td>说明</td>
   <td>msg</td>
   </tr>
   <tr>
   <td>1</td>
   <td>调用成功</td>
   <td>--</td>
   </tr>
   <tr>
   <td>-1</td>
   <td>参数错误</td>
   <td>params error</td>
   </tr>
   <tr>
   <td>-2</td>
   <td>手机号格式错误</td>
   <td>mobile format error</td>
   </tr>
   <tr>
   <td>-3</td>
   <td>订单号格式错误</td>
   <td>order_id format error</td>
   </tr>
   <tr>
   <td>-4</td>
   <td>查询失败</td>
   <td>query fail</td>
   </tr>
   </table>
   
   **当状态码 code == 1 时，会返回data域，以手机号为 key
   
   <table>
   <tr>
   <td>键</td>
   <td>类型</td>
   <td>说明</td>
   </tr>
   <tr>
   <td>repetitionIndex</td>
   <td>double(0.10)</td>
   <td>重复购物指数</td>
   </tr>
   <tr>
   <td>regularIndex</td>
   <td>double(0.10)</td>
   <td>正常购物指数</td>
   </tr>
   <tr>
   <td>robotIndex</td>
   <td>double(0.10)</td>
   <td>机器注册指数</td>
   </tr>
   <tr>
   <td>networkIndex</td>
   <td>double(0.10)</td>
   <td>关系网络历史风险</td>
   </tr>
   <tr>
   <td>suspectIndex</td>
   <td>double(0.10)</td>
   <td>号码非正常使用概率</td>
   </tr>
   <tr>
   <td>rating</td>
   <td>char(1)</td>
   <td>风险等级(评级详见附表)</td>
   </tr>
   <tr>
   <td>score</td>
   <td>double(0.100)</td>
   <td>综合评分</td>
   </tr>
   <tr>
   <td>querytime</td>
   <td>datatime</td>
   <td>格式化查询时间</td>
   </tr>
   </table>
   
  **风险等级说明：rating
  
   <table>
   <tr>
   <td>值</td>
   <td>说明</td>
   <td>取值说明</td>
   </tr>
   <tr>
   <td>L</td>
   <td>低风险</td>
   <td>score取值 [0,10] </td>
   </tr>
   <tr>
   <td>M</td>
   <td>中等风险</td>
   <td>score取值 (10,80] </td>
   </tr>
   <tr>
   <td>H</td>
   <td>高风险</td>
   <td>score取值 (80,100] </td>
   </tr>
   </table>
   
   ###代码级调用，(适用于API内部调用)
   <code>
    $ci = & get_instance();   
        $ci->load->library('ebuckler');
        
        $refresh = false;
        $params = array(
            'mobile' => '18606028163',
            'from' => 'reg'
        );
        
        $result = $ci->ebuckler->score( $params, $refresh );
        return $result;
   </code>

   ###API服务调用，(适用于官网等外部项目调用)，以官网为例
   <code>
   
    /**
     * [risk 调用风控服务]
     */
    public function riskServices( $mobile )
    {
        $pram = array(
            "mobile" => $mobile,
            "from" => 'reg'
        );
        
        $this->setSource('risk');
        $this->set('mobile.score', $pram);
        $result = $this->getApiContent();
        $this->setSource('pc');
        
        return $result;
    }
    </code>
    
