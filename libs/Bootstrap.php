<?php
class Bootstrap{
	function __construct(){
		$url = "NONE URL";
		if(isset($_GET['url'])){
			$url = $_GET['url'];
		}

		$url = rtrim($url,'/');
		$url = explode('/', $url);
		//init the controller
		$file = 'controllers'.'/'.$url[0].'.php';
		if(file_exists($file)){
			require $file;
			$controller = new $url[0];
			$controller->loadModel($url[0]);
		}else{
			require 'controllers/index.php';
			$controller = new Index();
			//$controller = new Error();
			//return false;
		}
		//init the method
		if(isset($url[1])){
			if(isset($url[2])){
				$controller->{$url[1]}($url[2]);
			}else{
				$controller->{$url[1]}();
			}
		}else{
			$controller->index();
		}
		return false;
	}
}