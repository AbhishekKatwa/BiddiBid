<?php
	extract($_GET);
	$json_a=file_get_contents("details.json");
	$json_a=json_decode($json_a,true);
	foreach ($json_a[$username] as $key => $value) {
		if($json_a[$username][$key]["ProductName"]==$Prodname)
			$json_a[$username][$key]["Bid"]=$val;
	}
	file_put_contents("details.json", json_encode($json_a));
	echo "success";
?>