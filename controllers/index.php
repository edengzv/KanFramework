<?php
class Index extends controller{
	function __construct(){		
		parent::__construct();
	}

	function index(){
		$this->view->render('index/index');
	}

}