<?php 

class View{
	function __construct(){

	}

	public function render($name,$isInclude = true){
		if($isInclude){
			require 'views/header.php';
			require 'views/'.$name.'.php';
			require 'views/footer.php';
		}else{
			require 'views/'.$name.'.php';
		}
	}
}