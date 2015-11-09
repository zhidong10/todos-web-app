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
?>