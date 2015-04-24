<?php
class Session{
	function __construct(){
		@session_start();
	}

	public function set($key,$value){ 
		$_SESSION[$key] = $value;
	}

	public function get($key){
		if(isset($key)){
			return $_SESSION[$key];
		}
	}

	public function destory(){
		session_destroy();
	}
}

