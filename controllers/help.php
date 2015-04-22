<?php

class Help extends controller{
	function __construct(){
		parent::__construct();
		echo "we are inside help";
	}

	public function other($param = false){
		echo "we are in help and others method <br/>";
		echo $param;

		require 'models/help_model.php';
		$model = new Help_Model();
	}
}