<?php

class Help extends controller{
	function __construct(){
		parent::__construct();
	}

 	function index(){
 		$this->view->render('help/index');
 	}

	public function other($param = false){
		require 'models/help_model.php';
		$model = new Help_Model();
	}
}