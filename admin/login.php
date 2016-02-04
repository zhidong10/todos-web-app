<?php
error_reporting(E_ALL^E_NOTICE);
session_start();
require_once './conn.php';
require_once("./core/common-function.php");

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
$pwd=md5($pwd);
//根据用户名和密码查询用户信息
$query_user = "select * from sb_user where email='$email' and pwd='$pwd'";
$result=mysql_query($query_user);
$row=mysql_fetch_array($result);
if($row){
	setcookie('email',$row['email']);
    setcookie('token',$row['pwd']);
    $_SESSION['uname'] = $row['email'];
	echo reszon(true, "登录成功！");
	exit;
}else{
    echo reszon(false, "用户名或密码错误，登录登录失败！");
}
mysql_close($conn);

?>