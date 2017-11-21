<?php
	ob_start();
	echo $_FILES["myform"]["name"];
	ob_flush();
	flush();
	//sleep(1);
	$ret=move_uploaded_file($_FILES["myform"]["tmp_name"],"C:\\xampp\\htdocs\\6thSem\\1\\images\\".$_FILES["myform"]["name"]);
	if($ret){
		echo "success";
	}
	
?>