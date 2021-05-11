<?php

header("Content-type: text/event-stream");


ob_start();
ob_flush();
flush();


$oldtime=filemtime("bchat.txt");

while(true)
{
		clearstatcache();
		$newtime=filemtime("bchat.txt");
		if($newtime != $oldtime)
		{
			$msgarr=file("bchat.txt");
			//we need only the latest message which our friend types, not the whole file
			$latestmsg=array_pop($msgarr);

			//send the event-stream
			echo "event:chatmsg\n";
			echo "retry:100\n";
			echo "data: $latestmsg\n\n";

			ob_flush();
			flush();	
		
			$oldtime=$newtime;
			//get the session with the timestamp
			//$_SESSION["modtime"]=$newtime;
		}
		sleep(2);
}
?>