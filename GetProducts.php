<?php
	extract($_GET);
	//$username="abhi";
	$string=file_get_contents("details.json");
	$json_a=json_decode($string,true);
	$str="";
	foreach ($json_a as $key => $value)
	 {
			if($key!=$username)
			{
				foreach ($value as $key1 => $value1) {
						if(is_array($value1)){
							//echo $value1["image"];
							$str=$str."".$value1["image"].";".$value1["Expires"].";".$value1["ProductName"].";";
						}
					}	
			}
					
	}
	echo $str;
	
?>