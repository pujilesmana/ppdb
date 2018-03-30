<?php
	
	class User extends CI_Controller{
		var $modelAccount;
		var $modelUser;

		var $nisn;

		public function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelPendaftaran = new Pendaftaran();
			$this->modelPeserta = new Datapeserta();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		public function _remap($action){
			if($this->session->userdata('nisn') != "" && $this->session->userdata('tipe_account') == 2){
				if($action == 1){
					$this->logoutProses();
				}
				elseif($action == 'dataPengumumanverifikasi'){
					$this->pengumumanVerifikasi();
				}
				elseif($action == 'dataPengumumanhasilujian'){
					$this->pengumumanHasilujian();
				}
				elseif($action == 'datainformasi'){
					$this->informasi();
				}
				elseif($action == 'setting'){
					$this->setting();
				}
				elseif($action == 'prosesUbahPassword'){
					$this->prosesUbahPassword();
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

		public function pengumumanVerifikasi(){
			if($this->session->userdata("tipe_account")==2){
				$nisn = $this->session->userdata("nisn");
				$list_data = $this->modelPeserta->read("*", "WHERE nisn = '".$nisn."'", "account");
				$row_data = $list_data->result_array();

				$this->load->view("user/header.php");
				$this->load->view("user/sidebar_pengumuman.php");
				$this->load->view("user/Pengumuman_verifikasi.php", ["dataverifikasi" => $row_data]);
				$this->load->view("user/footer.php");
			}
		}

		public function pengumumanHasilujian(){
			if($this->session->userdata("tipe_account")==2){
				$nisn = $this->session->userdata("nisn");
				$list_data = $this->modelPeserta->read("*", "WHERE nisn = '".$nisn."'", "account");
				$row_data = $list_data->result_array();

				$this->load->view("user/header.php");
				$this->load->view("user/sidebar_pengumuman.php");
				$this->load->view("user/Pengumuman_hasilujian.php", ["datahasilujian" => $row_data]);
				$this->load->view("user/footer.php");
			}
		}

		public function informasi(){
			if($this->session->userdata("tipe_account")==2){
				$this->load->view("user/header.php");
				$this->load->view("user/sidebar_informasi.php");
				$this->load->view("user/Informasi_pendaftaran");
				$this->load->view("user/footer.php");
			}
		}

		public function logoutProses(){
			$this->session->sess_destroy();
			redirect();
		}

		public function setting(){
			if($this->session->userdata("tipe_account")==2){
				$nisn = $this->session->userdata("nisn");
				$list_data = $this->modelPeserta->read("*", "WHERE nisn = '".$nisn."'", "account")->row();

				$this->load->view("user/header.php");
				$this->load->view("user/editprofile", ["dataSiswa" => $list_data]);
				$this->load->view("user/footer.php");
			}
		}

		public function prosesUbahPassword(){
			if($this->session->userdata("tipe_account")==2){
				//$nisn = $this->session->userdata("nisn");
				$obj = json_decode($_POST['myData']);
				$nisn				= $obj->nisn;
				$passwordBaru 		= $obj->password_baru;
				$konfirmPassword 	= $obj->confirm_password_baru;

				if($password_baru == $konfirmPassword){
					$this->modelAccount->ubah_password($password_baru,$nisn);
					echo 1;	
				}
				else
					echo 0;
			}
		}

		public function prosesReset(){
			echo "hi";
		}
	}
?>