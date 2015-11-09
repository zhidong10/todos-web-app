<?php
require_once '/conn.php';
require_once("common-function.php");
if(isset($_COOKIE['email'])&&isset($_COOKIE['token'])){
	$query_user = "select * from sb_user where email='".$_COOKIE['email']."' and pwd='".$_COOKIE['token']."'";
	$result=mysql_query($query_user);
	$row=mysql_fetch_array($result);
	if($row){
		echo reszon(true, "已登录！");
		exit;
	}
}else{
	echo reszon(false, "未登录！");
}
?>