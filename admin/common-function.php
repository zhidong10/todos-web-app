<?php
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

function loginSel(){
	if(isset($_COOKIE['email'])&&isset($_COOKIE['token'])){
		$query_user = "select * from sb_user where email='".$_COOKIE['email']."' and pwd='".$_COOKIE['token']."'";
		return $query_user;
	}else{
		return false;
	}
}
?>