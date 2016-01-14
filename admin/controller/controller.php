<?php 
	error_reporting(E_ALL^E_NOTICE);
	session_start();
	header("Content-Type: text/html; charset=UTF-8");
	require_once "../views/views.php";
	require_once "../module/module.php";
	require_once("../common-function.php");
	$sql = loginSel();
	$view = new VIEWS();
	$model = new Model();
	$type = $_GET["type"];
	$sql_list = "SELECT id,log FROM `sb_user_data` WHERE uid=(SELECT id FROM `sb_user` WHERE email='zhidong@q.com')";
	if(!($sql && $model->isLogin($sql))){
		$view->commView(1,'未登录','[]');
		exit;
	}
	if(!type){
		$view->commView(2,'参数错误','[]');
	}else if($type == 'list'){
		$row = $model->getData($sql_list);
		echo $view->commView(0,'成功',$row);
	}
	//获取列表
	//if()
	//更新数据

	//删除数据



 ?>