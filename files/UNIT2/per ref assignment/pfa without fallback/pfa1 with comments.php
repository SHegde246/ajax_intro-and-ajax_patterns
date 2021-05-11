<?php
//if(isset($_GET['btnsubmit']))
//{
	printf("hi");
	$dept=strtolower($_GET['sel_dept']);
	//$filer=fopen("curr seat avail.txt","r");
	//$old_values=fread($filer,filesize("curr seat avail.txt"));
	//fclose($filer);
		

	$old_values=file_get_contents("curr seat avail.txt");
	
	$arr=json_decode($old_values,true);

	if($arr[$dept] != 0)
	{
		$arr[$dept]-=1;
	}

	$updated_arr=json_encode($arr);

	//$filew=fopen("curr seat avail.txt","w");
	//fwrite($filew,$updated_arr);
	//fclose($filew);

	

	file_put_contents("curr seat avail.txt",$updated_arr);

	

	//$old_vals_str=trim($old_vals_str,"{}");

	
	
//}
?>