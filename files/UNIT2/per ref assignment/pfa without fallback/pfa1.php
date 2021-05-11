<?php

//value of department selected sent to php
//have to extract the value of it, using the name of its tag
$dept=strtolower($_GET['sel_dept']);

	
//reads file as string
$old_values=file_get_contents("curr seat avail.txt");

	
//converts JSON string to PHP associativity array
$arr=json_decode($old_values,true);


//makes sure value is not already 0, and decrements
if($arr[$dept] != 0)
{
	$arr[$dept]-=1;
}


//encodes the updates array back to JSON format
$updated_arr=json_encode($arr);


//writes JSON string back to text file
file_put_contents("curr seat avail.txt",$updated_arr);

?>