<?php
	ob_start();
	header("Content-type:text/event-stream");
	date_default_timezone_set('Asia/Calcutta');
	echo str_pad('',1012);
	ob_flush();
	flush();

	$oldtime = filemtime("InfoPage.txt");
	while(true)
	{
		clearstatcache();
		$newtime = filemtime("InfoPage.txt");
		
		if($newtime > $oldtime)
		{
			$newone = file("InfoPage.txt");
			$latest = array_pop($newone);
			echo "event:myevent\n";
			echo "retry:30\n";
			echo "data:$latest\n\n";
			ob_flush();
			flush();		
			$oldtime = $newtime;
			//$_SESSION["modtime"] = $newtime;
		}
		sleep(1);
		// echo "event:myevent\n";
		// 	echo "retry:3000\n";
		// 	echo "data:success\n\n";
		// 	ob_flush();
		// 	flush();		
	}

?>