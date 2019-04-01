<?php
$str=md5(microtime());;
$str=substr($str,0,6);
session_start();
$_SESSION['cap_code']=$str;
$img=imagecreate(200,50);
imagecolorallocate($img,197, 147, 64);
$txtcol=imagecolorallocate($img,0,0,0);
imagestring($img,20,5,5,$str,$txtcol);
//header('content:image/jpeg');
imagejpeg($img);
?>