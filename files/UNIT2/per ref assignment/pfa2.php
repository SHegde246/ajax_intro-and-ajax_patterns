<?php
$file=fopen("curr seat avail.txt","r");
$seats=fread($file,filesize("curr seat avail.txt"));

echo $seats;



//sleep(10);
?>