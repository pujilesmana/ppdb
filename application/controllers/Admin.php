<?php
	
	class Admin extends CI_Controller{

		public function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelPeserta = new Datapeserta();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		public function _remap($action){
			if($this->session->userdata('nisn') != "" && $this->session->userdata('tipe_account') == 1){
				if($action == 'logout'){
					$this->logoutProses();
				}
				else{
					$this->home();
				}
			}
			else{
				redirect();
			}
		}	

		public function home(){
			if($this->session->userdata("tipe_account") == 1){
				// $nisn = $this->session->tipe_account("nisn");
				$list_data = $this->modelPeserta->read("*", "WHERE tipe_account = 2", "account");
				$row_data = $list_data->result_array();

				$this->load->view("admin/home.php", ["datapeserta" => $row_data]);
			}
		}

		public function logoutProses(){
			$this->session->sess_destroy();
			redirect();
		}		
	}
?>