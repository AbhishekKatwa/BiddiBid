<?php
	extract($_GET);
	$json_a=file_get_contents("details.json");
	$json_a=json_decode($json_a);
	$str="";
	foreach ($json_a as $key => $value) {
		if($key==$username)
		{
			foreach ($value as $key1 => $value1) {
				 foreach ($value1 as $key2 => $value2) {
					if($key2=="ProductName")
						$str=$str."".$value2.",";
					else if($key2=="Bid")
						$str=$str."".$value2.":";
				 }
			}
			echo $str;
			return;
		}
	}
?>