<?php
	extract($_GET);
	$json_a=file_get_contents("Users.json");
	$json_a=json_decode($json_a,true);
	$arr=array();
	$arr["name"]=$name;
	$arr["password"]=$pwd;
	// $json_a[]["name"]=$name;
	// $json_a[]["password"]=$pwd;
	$json_a[]=$arr;
	$json_a=json_encode($json_a);
	file_put_contents("Users.json", $json_a);
	echo "success";
?>