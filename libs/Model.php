<?php 

class Model{
	function __construct(){
		echo "In The Model";

		$this->database = new Database();
	}
}