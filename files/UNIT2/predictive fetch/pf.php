<?php
extract($_GET);
$fname="content".$count.".txt";
$file=fopen($fname,"r");
$size=filesize($fname);
$retstr=fread($file,$size);
echo $retstr;
?>