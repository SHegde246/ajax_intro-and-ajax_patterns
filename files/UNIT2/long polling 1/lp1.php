<?php
//set_time_limit(0); //don't set time limit, script will never stop running. not recommended   

//op buffering ctrl func
ob_start();
ob_flush();
flush();       //flush contents of buffer to op stream

$data=fopen("data1.txt","r");
$old_mod=filemtime("data1.txt");    //it sees at what pt of time modification of file happens
while(true)
{
	clearstatcache();      //use whenever filemtime used, to make sure value is always the latest one
	$last_mod=filemtime("data1.txt");
	if($last_mod > $old_mod)
	{
		echo "<script type= 'text/javascript'>";
		$r=fread($data,filesize("data1.txt"));
		$retstr="File changed at:".date('H i s',$last_mod)." ".$r;   //i => minutes, because m => month
		echo "parent.obj.updatediv('$retstr');";
		echo "</script>";
		ob_flush();
		flush();
		$old_mod=$last_mod;
	}
	else
	{
		echo "<script type= 'text/javascript'>";
		echo "parent.obj.heartbeat();";
		echo "</script>";
		ob_flush();
		flush();
	}
	sleep(2);
}

?>