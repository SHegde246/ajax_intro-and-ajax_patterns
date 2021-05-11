<?php
header("Content-type:text/event-stream");
ob_start();
ob_flush();
flush();
for($i=0;$i<4;$i++)
{
	//all events of event stream sep by \n
	//"\n\n" => end of event stream	


	echo "event:pes\n";

	//in case conn to server gets lost, will try to
	//reconnect after retry period
	//default=3 sec

	echo "retry:70000\n";

	echo"data:Hello ".$i."\n\n";
	ob_flush();
	flush();
	sleep(2);
}
echo "event:over\n";
echo "data: streaming is done\n\n";
?>