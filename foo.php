<?php
class Client {
	
	function nowTime ($string) {
		if($string == 'MyGreeter\Client'){
			$now_date= date('H:i:s',$now_time);
			if ($now_date >= '00:00:00' && $now_date < '12:00:00')
				return "早上好";
			}elseif ($now_date >= '12:00:00' && $now_date < '18:00:00') {
				return "下午好";
			}elseif ($now_date >= '18:00:00' && $now_date <= '23:59:59') {
				return "晚上好";
			}
		}else{
			return false;
		}
	}
}
