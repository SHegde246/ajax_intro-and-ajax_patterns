<?php
$res=array();
extract($_GET);
if($fname=="Holige")
{
	$res["cs"]="South Indian";
	$res["price"]="60";
}
if($fname=="Kheer")
{
	$res["cs"]="North Indian";
	$res["price"]="70";
}
$ret=json_encode($res);
echo $ret;
?>

