<?php

	class Data extends CI_Controller{

		public function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelPeserta = new Datapeserta();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		public function verifikasi($dataApa = "",$nisn){
			if($this->session->userdata("tipe_account") == 1){
				if($dataApa == 'verify'){
					$this->modelPeserta->update("account","verifikasi = 2 WHERE nisn = '".$nisn."'");
				}
				elseif($dataApa == 'pembatalan'){
					$this->modelPeserta->update("account","verifikasi = 1 WHERE nisn = '".$nisn."'");
				}
				redirect("Admin");
			}
		}

		public function kelulusan($dataApa = "", $nisn){
			if($this->session->userdata("tipe_account") == 1){
				if($dataApa == 'lulus'){
					$this->modelPeserta->update("account","kelulusan = 1 WHERE nisn = '".$nisn."'");
				}
				elseif($dataApa == 'tidaklulus'){
					$this->modelPeserta->update("account","kelulusan = 2 WHERE nisn = '".$nisn."'");
				}
				elseif ($dataApa == 'pembatalan') {
					$this->modelPeserta->update("account","kelulusan = 0 WHERE nisn = '".$nisn."'");
				}
				redirect("Admin");
			}
		}
	} 
?>