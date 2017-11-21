<?php
	extract($_GET);
	$json_a=file_get_contents("Users.json");
	$json_a=json_decode($json_a,true);
	foreach ($json_a as $key => $value) {
		if($value["name"]==$name && $value["password"]==$pwd)
			echo "success";
	}

?>