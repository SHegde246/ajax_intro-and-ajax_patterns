<?php

header("Content-type:image/jpeg");
extract($_GET);
if($uid=="sneha")
{
	$img= @imagecreate(100,100);   //(width,height)
}
else
{
	$img= @imagecreate(200,200);
}

$background_color=imagecolorallocate($img,0,0,0);
$text_color=imagecolorallocate($img,233,14,91);
imagestring($img,1,5,5,"HELLO",$text_color);     //(image,font size[1-5],x,y,text,color)
imagecolorallocate($img,200,100,200);              //(image,r,g,b)
imagejpeg($img);
imagedestroy($img);
?>