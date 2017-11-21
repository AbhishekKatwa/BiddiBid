<?php
	extract($_GET);
	$string=file_get_contents("details.json");
	$json_a=json_decode($string,true);
	// foreach ($json_a as $key => $value)
	//  {
	// 		if($key==$username)
	// 		{
	// 			foreach ($value as $key1 => $value1) {
	// 					if(is_array($value1)){
	// 						if($value1["ProductName"]==$prodname){
	// 							echo $key.";".$value1["ProductName"].";".$value1["Bid"].";".$value1["Expires"].";".$value1["Category"].";".$value1["image"].";";
	// 							return;
	// 						}
	// 					}
	// 				}	
	// 		}
					
	// }
	foreach ($json_a as $key => $value)
	 {
				foreach ($value as $key1 => $value1) {
						if(is_array($value1)){
							if($value1["ProductName"]==$prodname && $value1["image"]==$name){
								echo $key.";".$value1["ProductName"].";".$value1["Bid"].";".$value1["Expires"].";".$value1["Category"].";".$value1["image"].";";
								return;
							}
						}
					}	
					
	}
	//echo "success";
	
?>