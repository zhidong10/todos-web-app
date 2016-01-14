<?php 
class VIEWS{
	public function commView($sta, $message, $data){
		$arr = array(
				"code"=>$sta,
				"message"=>$message,
				"data"=>$data
			);
		return json_encode($arr);
	}
}
?>