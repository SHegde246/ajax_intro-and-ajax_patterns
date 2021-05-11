<?php
extract($_GET);
$res=array(); //we don't know how big the search result will be. therefore, make dynamic
if(ctype_space($term) || strlen($term) == 0) //if search consists of only spaces or if it is empty
{
	$res[]="NOPE";
}
else
{
	$file=fopen("food.txt","r");
	while(!feof($file))  //while not end of file
	{
		$line=trim(fgets($file));  //trim to get rid of junk values
		if(strncasecmp($line,$term,strlen($term)) ==0)              //make case insensitive during search (n repr how many char to searched)
		{
			$res[]=$line;	
		}
	}
}
echo json_encode($res);
?>