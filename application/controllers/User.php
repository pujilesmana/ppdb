<?php
	
	class User extends CI_Controller{

		function __construct(){
			parent::__construct(); 
		}

		function _remap($action){
			if($action == 1){

			}
			else{
				$this->home();
			}
		}

		public function home(){
			$this->load->view("user/home.php");
		}
	}
?>