<?php
set_time_limit(0);

ob_start();
ob_flush();
flush();
$file=fopen("data3.txt","r");
$oldtime=filemtime("data3.txt");    //it sees at what pt of time modification of file happens
while(true)
{
	clearstatcache();      //use whenever filemtime used, to make sure value is always the latest one
	$newtime=filemtime("data3.txt");
	if($newtime > $oldtime)
	{
		$data=fread($file,filesize("data3.txt"));
		$oldtime=$newtime;
		echo $data." change happened at: ".date('H i s',$newtime);
		ob_flush();
		flush();
	}
	sleep(2);
}