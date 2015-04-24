<?php 

class View{
	function __construct(){

	}

	public function render($name,$isInclude = true){
		if($isInclude){
			require URL.'views/header.php';
			require URL.'views/'.$name.'.php';
			require URL.'views/footer.php';
		}else{
			require URL.'views/'.$name.'.php';
		}
	}
}