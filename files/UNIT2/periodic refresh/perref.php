<?php
$file=fopen("scores.txt","w");
$updates=rand(10,450).";".rand(36,568).";".rand(200,450);
fwrite($file,$updates);
fclose($file);
$file=fopen("scores.txt","r");
$data=fread($file,500);
echo $data;
sleep(6);
?>