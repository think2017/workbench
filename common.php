<?php

/**
 * @desc 中文字符串截取函数
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
 * @desc 正则提取字符串合法字符（中文、数字、字母、下划线）
 * @char-set UTF-8
 * 
 **/
function match_string($str)
{
    if(preg_match_all("/[\x{4e00}-\x{9fa5}|0-9|a-z|A-Z|_]/u", $str, $matches)){
        return $matches;
    }else{
        return false;
    }
}
