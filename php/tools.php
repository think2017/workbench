<?php

/**
 * @desc 中文字符串截取函数(一个中文字符识为长度为3)
 * @char-set UTF-8
 * 
 **/
function cutstr($string, $length) 
{
    preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $info);  
    for($i=0; $i<count($info[0]); $i++) {
        $wordscut .= $info[0][$i];
        $j = ord($info[0][$i]) > 127 ? $j + 2 : $j + 1;
        if ($j > $length - 3) {
            return $wordscut." ...";
        }
    }
  
    return join('', $info[0]);
}


/**
 * @desc 中文字符串截取函数(将一个中文字符识为长度为一的字符)
 * @char-set UTF-8
 * 
 **/
function utf_substr($str, $len)
{
    for($i=0;$i<$len;$i++)
    {
        $temp_str = substr($str,0,1);
        $str_code = ord($temp_str);
        
        if($str_code >= 224){
            $new_str[] = substr($str, 0, 3);
            $str = substr($str, 3);
        }elseif(192 <= $str_code && $str_code < 224){
            $new_str[] = substr($str, 0, 2);          
            $str = substr($str, 2);
        }else{
            $new_str[] = substr($str, 0, 1);          
            $str = substr($str, 1);
        }
    }

    return join($new_str);
}



/**
 * @desc 正则提取字符串合法字符（中文、数字、字母、下划线）
 * @char-set UTF-8
 * 
 **/
function match_string($str)
{
    if(preg_match_all("/[\x{4e00}-\x{9fa5}|0-9|a-z|A-Z|_]/u", $str, $matches)){
        return $matches[0] ? implode("", $matches[0]) : '';
    }else{
        return false;
    }
}


/**
 * @desc 获取一个字符串的自然长度
 * @char-set UTF-8
 * 
 **/
function utf8_strlen($string = null) {
    preg_match_all("/./us", $string, $match);

    return count($match[0]);
}
