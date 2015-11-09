<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
require_once '/conn.php';
function reszon($r, $t){
	$obj;
	if($r){
		$i = 'success'; 
	}else{
		$i = 'fail';
	}
	@$obj->result = $i;
	@$obj->message = $t;
	return json_encode($obj);
}
//判断用户名不低于字数
$email=trim($_POST["email"]);
$pwd=trim($_POST["pwd"]);
$code=trim($_POST["code"]);
$mailReg = "/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
$pwdReg = "/^\S{6,32}$/"; //密码长度6-32
$codeReg = "/^\S{4}$/"; //验证码长度4
if(!preg_match($mailReg, $email)){
    echo reszon(false, "邮箱格式不正确！");
    exit;
}
if(!preg_match($pwdReg, $pwd)){
    echo reszon(false, "密码长度不是6-32位！");
    exit;
}
if(!preg_match($codeReg, $code)){
    echo reszon(false, "验证码长度不正确！");
    exit;
}
if($code != $_SESSION['code']){
	echo reszon(false, "验证码不正确！");
	exit;
}
unset($_SESSION['code']);//清空指定的session
//判断用户邮箱是否存在
$result=mysql_query("select * from sb_user where email='$email'");

$row=mysql_fetch_array($result);
	if($row){
		echo reszon(false, "该邮箱已经注册了！");
		exit;
	}
$pwd=md5($pwd);
$time = date("Y-m-d h:m:s");
$sql=mysql_query("insert into sb_user(email,pwd,regtime)
VALUES('$email','$pwd','$time')");
if($sql){
	echo reszon(true, "注册成功！");
}
else {
	echo reszon(0, "注册失败！");
}
mysql_close($conn);
?>