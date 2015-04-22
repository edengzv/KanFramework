<?php
class Controller{
	function __construct(){
		echo "Main controller";
		$this->view = new View();
	}
}