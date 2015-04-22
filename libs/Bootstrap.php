<?php
class Bootstrap{
	function __construct(){
		$url = "NONE URL";
		if(isset($_GET['url'])){
			$url = $_GET['url'];
		}

		$url = rtrim($url,'/');
		$url = explode('/', $url);

		$file = 'controllers'.'/'.$url[0].'.php';
		if(file_exists($file)){
			require $file;
		}else{
			//throw new Exception("The file: ".$file.'Does not exists!');
			require 'controllers/error.php';
			$controller = new Error();
			return false;
		}
		$controller = new $url[0];

		if(isset($url[2])){
			$controller->{$url[1]}($url[2]);
		}else{
			$controller->{$url[1]}();
		}
	}
}