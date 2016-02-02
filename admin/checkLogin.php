<?php
require_once("./core/common-function.php");
require_once "./module/module.php";
$sql = loginSel();
$model = new Model();
if($sql && $model->isLogin($sql)){
	echo reszon(true, "已登录！");
	exit;
}else{
	echo reszon(false, "未登录！");
	exit;
}
?>