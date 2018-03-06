<?php
	
	class User extends CI_Controller{
		var $modelAccount;
		var $modelUser;

		var $nisn;

		public function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelPendaftaran = new Pendaftaran();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		public function _remap($action){
			if($this->session->userdata('nisn') != "" && $this->session->userdata('tipe_account') == 2){
				if($action == 1){
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
			$nisn = $this->session->userdata("nisn");
			$query = $this->modelPendaftaran->read("COUNT(nisn) as nomor","WHERE nisn='".$nisn."'","data_pribadi")->result_array()[0]["nomor"];
			if($query == 0){
				$this->modelPendaftaran->insert("data_pribadi(nisn)","".$nisn."");
				$this->load->view("user/home.php",["nisn" => $nisn]);
			}else{
				$this->load->view("user/home.php",["nisn" => $nisn]);
			}
		}

		public function logoutProses(){
			$this->session->sess_destroy();
			redirect();
		}
	}
?>