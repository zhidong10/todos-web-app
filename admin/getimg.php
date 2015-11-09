<?php
session_start();
//创建随机码
$_nmsg = '';
for($i = 0; $i<4; $i++){
    $_nmsg .= dechex(mt_rand(0,15)); 
}
//保存在session
$_SESSION['code'] = $_nmsg;

//创建一个真彩色图像
$_width =75;
$_height = 25;
$_img = imagecreatetruecolor($_width, $_height);
//白色
$_white = imagecolorallocate($_img, 255, 255, 255);
//填充
imagefill($_img, 0, 0, $_white);
//随机画出6个线条
for($i = 0; $i<6; $i++){
    $_md_color  = imagecolorallocate($_img,mt_rand(0, 255),mt_rand(0, 255), mt_rand(0, 255));
    imageline($_img, mt_rand(0, 75),  mt_rand(0, 75),  mt_rand(0, 75),  mt_rand(0, 75),$_md_color); 
}
//随机雪花
for($i = 0; $i<100;$i++){
    $_md_color = imagecolorallocate($_img, mt_rand(200, 255), mt_rand(200, 255), mt_rand(200, 255));
    imagestring($_img, 1, mt_rand(1, $_width), mt_rand(1, $_height), '*', $_md_color);
}
//黑色边框
$_black = imagecolorallocate($_img, 0, 0, 0);
imagerectangle($_img, 0, 0, $_width-1, $_height-1, $_black);
//输出验证码
for($i = 0;$i<strlen($_SESSION['code']);$i++){
    $_mt_color = imagecolorallocate($_img, mt_rand(0, 100), mt_rand(0, 150), mt_rand(0, 200));
    imagestring($_img, mt_rand(5, 5), $i*$_width/4+mt_rand(1, 10), mt_rand(1, $_height/2), $_SESSION['code'][$i],$_mt_color);  
}
header('Content-Type:image/png');
imagepng($_img);
//销毁
imagedestroy($_img);

?>