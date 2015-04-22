<?php
class Error extends controller{
	function __construct(){
		parent::__construct();
		echo "this is an error<br/>";

		$this->view->msg = 'the is error';
		$this->view->render('error/index');
	}
}