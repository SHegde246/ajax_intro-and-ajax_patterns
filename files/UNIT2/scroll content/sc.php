<?php
extract($_GET);                         //added
$chunk=300;                           //added
$pos=$count * $chunk;             //added
$file=fopen("busted.txt","r");
fseek($file,$pos);              //added
$data=fread($file,filesize("busted.txt"));
echo $data;
?>