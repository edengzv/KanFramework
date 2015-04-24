<?php

class Help extends controller{
	function __construct(){
		parent::__construct();
	}

 	function index(){
 		$this->view->render('help/index');
 	}

	public function other($param = false){
		$model = $this->loadModel('help');
		$this->view->render('help/other');
	}
}