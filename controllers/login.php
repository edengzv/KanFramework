<?php 

class Login extends Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){
		$this->view->render('login/index');
	}

	public function login(){

		$this->model->run();
		if($_SESSION['logind']){
			$this->view->render('login/success');
		}else{
			$this->view->render('login/index');
		}
	}

	public function logout(){
		$this->view->render('login/index');
		session_destroy();
	}
}