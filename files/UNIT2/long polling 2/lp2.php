<?php
extract($_GET);

set_time_limit(0);

//ob_start();
//ob_flush();
//flush();
$data=fopen("data2.txt","r");
$res=array();

while(true)
{
	clearstatcache();      //use whenever filemtime used, to make sure value is always the latest one
	$last_mod=filemtime("data2.txt");
	if($last_mod > $timestamp)
	{
		$r=fread($data,filesize("data2.txt"));
		$res=["r"]=$r;
		$res=["t"]=$last_mod;
		echo json_encode($res);
		//ob_flush();
		//flush();
		break;
	}
	else
	{
		sleep(1);
		continue;
	}
}
?>