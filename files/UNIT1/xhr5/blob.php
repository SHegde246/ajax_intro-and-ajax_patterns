<?php
header("Content-type:video/mp4");
$file=fopen("SU.mp4","rb");
$f=fread($file,filesize("SU.mp4"));
echo $f;
fclose($file);
?>