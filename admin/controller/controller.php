<?php 
	error_reporting(E_ALL^E_NOTICE);
	session_start();
	header("Content-Type: text/html; charset=UTF-8");
	require_once "../views/views.php";
	require_once "../module/module.php";
	require_once("../core/common-function.php");
	$sql = loginSel();
	$view = new VIEWS();
	$model = new Model();
	$type = $_GET["type"];
	$uname = $_COOKIE["email"];
	if(!($sql && $model->isLogin($sql))){
		$view->commView(1,'未登录','[]');
		exit;
	}
	if(!type){
		$view->commView(2,'参数错误','[]');
	}else if($type == 'list'){
		$sql_list = "SELECT id,log,updateTime FROM `sb_user_data` WHERE uid=(SELECT id FROM `sb_user` WHERE email='".$uname."')";
		$row = $model->getData($sql_list);
		if($row){
			echo $view->commView(0,'成功',$row);
		}else{
			echo $view->commView(0,'失败','[]');
		}
		
	} 
	//获取列表
	//if()
	//更新数据

	//删除数据



 ?>