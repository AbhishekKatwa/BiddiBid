<?php
	extract($_GET);
	$string=file_get_contents("details.json");
	$json_a=json_decode($string,true);

	$ret=array();

	foreach ($json_a as $key => $value)
	 {
	 	foreach ($value as $key1 => $value1) {
			if(is_array($value1)){
					if(strncasecmp($value1["Category"],$movie,strlen($movie))==0)
						$ret[]=$value1["ProductName"];
					
				}	
		}
	}
	echo json_encode($ret);
?>