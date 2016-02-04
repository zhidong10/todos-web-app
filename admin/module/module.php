<?php
require_once 'D:\work\test\mygit\todos-web-app\admin\conn.php';
class Model{

	public function getData($sql){
		$result = mysql_query($sql);
		$arr = array();
		$i = 0;
		while($row = mysql_fetch_assoc($result)){
			$arr[$i] = $row;
			$i++;
		}
		if(count($arr)>0){
			return $arr;
		}else{
			return false;
		}
		//todos
	}
	public function updateData($sql){
		//todos
	}
	public function delData($sql){
		//todos
	}
	/**
	 * 判断是否登录
	 */
	public function isLogin($sql){
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		if($row){
			return true;
		}else{
			return false;
		}
	}
}

?>