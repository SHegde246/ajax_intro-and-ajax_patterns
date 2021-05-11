<?php
extract($_GET);
if($pid=="covid")
{
	$arr=array("symptoms" => "cold, cough, fever");
}
else
{
	$arr=array("symptoms" => "I don't know");
}
echo json_encode($arr);
//print_r($arr);
?>