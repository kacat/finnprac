<?php 

//formats an array/object to be displayed on screen for debug
if(! function_exists('print_array')){
	function print_array($obj){
		$str = '<pre>';
		$str .= print_r($obj, true);
		$str .='</pre>';
		return $str;
	}
}

?>