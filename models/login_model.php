<?php
class Login_Model extends Model{
	function __construct(){
		parent::__construct();
	}

	public function run(){
		print_r($_POST);
		$sth = $this->db->prepare("SELECT id FROM user WHERE name = :uname AND password = :upass");
		$sth->execute(array(':uname' => $_POST['username'],':upass' => md5($_POST['password'])));
		//$sth = $this->db->prepare("SELECT version()");
		//$sth->execute();
		$ret = $sth->rowCount();
		print_r($ret);
		//print_r($ret);
		if($ret > 0){
			//true
			$this->session->set('logind',1);
		}else{
			//
			$session->destroy('logind');
			echo 'false';
		}
		//echo $_POST['username'].' '.$_POST['password'];
	}
}