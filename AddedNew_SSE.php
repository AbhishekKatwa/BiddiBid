<?php
	extract($_GET);
	$string=file_get_contents("details.json");
	$json_a=json_decode($string,true);
	$str="";
	 foreach ($json_a[$username] as $key => $value) {
	 	if($value["ProductName"]==$product){
	 		echo $value["image"].";".$value["Expires"].";".$value["ProductName"].";";
	 		return;
	 	}
	 }
	echo "No such Entry added";
	
?>
