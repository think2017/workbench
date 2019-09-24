<?php
        $url = 'https://notify.51buycar.com/v1/sms/send?source=api';
        $data = array(
                'mobile'=>'18606028163',
                'message'=>$argv[1],
        );
        $data_string = json_encode($data);
        $sign = create_sign($data_string);
        $url .= '&sign='.$sign;
        $ch=curl_init($url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        //curl_setopt($ch, CURLOPT_HEADER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER,
            array('Content-Type:application/json',
            'Content-Length: ' . strlen($data_string))
        );
        $result = curl_exec($ch);

        curl_close($ch);

        function create_sign($params){
                $sign = md5(substr(md5($params.'signkey'), 0,-1)."s");
                return $sign;
        }
