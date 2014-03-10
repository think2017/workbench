<?php
/**
 * @desc ip地址过滤方法
 * @author Swagger
 * @date 2014-3-10
 **/

$blacklist = array(
'49.112.1.1',
'49.112.*.*',
'49.113.*.*',
'49.114.192.* ~ 49.114.254.*',
'49.115.*.*',
'49.116.*.*',
'49.117.*.*',
'49.118.*.*',
'49.119.*.*',
'27.98.224.* ~ 27.98.255.*',
'202.98.224.* ~ 202.98.255.*'
);

$ip = '49.114.192.1';
//$ip = $argv[1];

$result = iptables($ip, $blacklist);


function iptables($ip, $list)
{
    foreach ($list as $key => $row) {
	    if ($ip == $row) {
		    return false;
	    } elseif (strpos($row, '~')) {
		    $scope = explode('~',$row);
		    if (preg_match("/([0-9\.]+?)(\d+)\.\*$/", trim($scope[0]), $matches)) {
			    $begin_header = $matches[1];
			    $begin_number = $matches[2];
		    }
		
		    if (preg_match("/([0-9\.]+?)(\d+)\.\*$/", trim($scope[1]), $matches)) {
			    $end_header = $matches[1];
			    $end_number = $matches[2];
		    }

		    if ($begin_header && $end_header && $begin_header == $end_header) {
			    if(is_numeric($begin_number) && is_numeric($end_number)){
				    for($i = $begin_number; $i <= $end_number; $i++){
					    if( strpos($ip, $begin_header.$i) === 0 ){
						    return false;
					    }
				    }
			    }
		    }
	    } else {
		    $row_header = substr($row, 0, strpos($row, '*'));
		    if ($row_header && strpos($ip, $row_header) === 0) {
			    return false;		
		    }
	    }
    }

    return true;
}
