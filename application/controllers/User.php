<?php
	
	class User extends CI_Controller{

		function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		public function _remap($action){
			if($this->session->userdata('nisn') != "" && $this->session->userdata('tipe_account') == 2){
				if($action == 1){
					$this->logoutProses();
				}
				else if($action == "datapribadi"){
					$this->pendaftaran();
				}
				elseif ($action == "datasekolah") {
					$this->prosesdataPribadi();
				}
				elseif ($action == "dataNilaiRapot") {
					$this->prosesdataSekolah();
				}
				elseif ($action == "dataOrganisasi") {
					$this->prosesdataNilaiRapot();
				}
				elseif ($action == "dataPrestasi") {
					$this->prosesdataOrganisasi();
				}
				elseif ($action == "dataOrangTua") {
					$this->prosesdataPrestasi();
				}
				elseif ($action == "dataKesehatan") {
					$this->prosesdataOrangtua();
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
			$this->load->view("user/home.php");
		}

		public function pendaftaran(){
			$this->load->view("user/header.php");
			$this->load->view("user/sidebar.php");
			$this->load->view("user/Datapribadi.php");
			$this->load->view("user/footer");
		}

		public function prosesdataPribadi(){
			if($this->session->userdata("tipe_account") == 2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Data_sekolah.php");
				$this->load->view("user/footer");
			}
			else{
				redirect("");
			}
		}

		public function prosesdataSekolah(){
			if($this->session->userdata("tipe_account") == 2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Data_nilai_rapot.php");
				$this->load->view("user/footer");
			}
		}

		public function prosesdataNilaiRapot(){
			if($this->session->userdata("tipe_account") == 2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Data_Organisasi.php");
				$this->load->view("user/footer");
			}			
		}

		public function prosesdataOrganisasi(){
			if($this->session->userdata("tipe_account") == 2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Data_prestasi.php");
				$this->load->view("user/footer");
			}			
		}

		public function prosesdataPrestasi(){
			if($this->session->userdata("tipe_account") == 2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Data_Pribadi_Ortu.php");
				$this->load->view("user/footer");
			}				
		}

		public function prosesdataOrangtua(){
			if($this->session->userdata("tipe_account") == 2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Data_Kesehatan.php");
				$this->load->view("user/footer");
			}			
		}

		public function prosesdataKesehatan(){

		}

		public function logoutProses(){
			$this->session->sess_destroy();
			redirect();
		}
	}
?>