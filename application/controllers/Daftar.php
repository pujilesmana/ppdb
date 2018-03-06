<?php
	class Daftar extends CI_Controller
	{

		public function __construct(){
			parent::__construct(); 
			$this->modelAccount = new Account();
			$this->modelPendaftaran = new Pendaftaran();
			$this->modelAccount->fillAllData($this->session->userdata("nisn"),$this->session->userdata("username"),$this->session->userdata("tipe_account"));
		}

		public function datapribadi($nisn){
			if($this->session->userdata("tipe_account") == 2){
				
				$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_pribadi");
				$row_data = $list_data->result_array();

				$this->load->view("user/header.php");
				$this->load->view("user/sidebar.php");
				$this->load->view("user/Datapribadi.php",["dataPribadi" => $row_data]);
				$this->load->view("user/footer");
			}
		}

		public function prosesdataPribadi(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$nama 				= $obj->nama_lengkap;
				$alamat 			= $obj->alamat;
				$gender 			= $obj->jenis_kelamin;
				$tanggal_l 			= $obj->tanggal_lahir;
				$tempat_l			= $obj->tempat_lahir;
				$kewarganegaraan 	= $obj->kewarganegaraan;
				$agama 				= $obj->agama;
				$gol_darah 			= $obj->gol_darah;
				$berat_badan 		= $obj->berat_badan;
				$tinggi 			= $obj->tinggi;
				$kota 				= $obj->kota;
				$noTel 				= $obj->noTel;

				$this->modelPendaftaran->update("data_pribadi","nama = '".$nama."',alamat = '".$alamat."',gender = '".$gender."',tgl_lahir = '".$tanggal_l."',tmpt_lahir = '".$tempat_l."',kewarganegaraan = '".$kewarganegaraan."',agama = '".$agama."',gol_darah = '".$gol_darah."',berat_badan = '".$berat_badan."',tinggi = '".$tinggi."',kota = '".$kota."',no_telepon = '".$noTel."'");
				echo 1;
			}
		}

		public function dataSekolah($nisn){
				$id_sekolah = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_pribadi")->result_array()[0]['id_sekolah'];
				$nisn = $this->session->userdata("nisn");

				$list_data = $this->modelPendaftaran->read("*","WHERE id_sekolah='".$id_sekolah."'","data_sekolah")->result_array();
				$query1 = $this->modelPendaftaran->read("*","WHERE id_sekolah='".$id_sekolah."'","data_sekolah")->num_rows();

				if($query1 > 0){
					$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data1_sekolah.php",["datasekolah" => $list_data, "nisn" => $nisn]);
					$this->load->view("user/footer");
				}else{
					$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_sekolah.php",["nisn" => $nisn]);
					$this->load->view("user/footer");
				}
		}

		public function prosesdataSekolah(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$asal_sekolah 			= $obj->asal_sekolah;
				$tanggal_masuk 			= $obj->tanggal_masuk;
				$alamat_sekolah 		= $obj->alamat_sekolah;
				$nama_kepala_sekolah 	= $obj->nama_kepala_sekolah;
				$noTelSekolah 			= $obj->noTelSekolah;

				$this->modelPendaftaran->insert("data_sekolah(asal_sekolah,tanggal_masuk,alamat_sekolah,nama_kpl_sekolah,no_tlpn_sekolah)","'".$asal_sekolah."','".$tanggal_masuk."','".$alamat_sekolah."','".$nama_kepala_sekolah."','".$noTelSekolah."'");

				$id_sekolah = $this->modelPendaftaran->read("*","WHERE asal_sekolah='".$asal_sekolah."'","data_sekolah")->result_array()[0]['id_sekolah'];

				$this->modelPendaftaran->update("data_pribadi","id_sekolah = '".$id_sekolah."'");

				echo 1;

			}
		}

		public function prosesdataSekolahv1(){
			if($this->session->userdata("tipe_account") == 2){
				$obj 					= json_decode($_POST['myData']);
				$asal_sekolah 			= $obj->asal_sekolah;
				$tanggal_masuk 			= $obj->tanggal_masuk;
				$alamat_sekolah 		= $obj->alamat_sekolah;
				$nama_kepala_sekolah 	= $obj->nama_kepala_sekolah;
				$noTelSekolah 			= $obj->noTelSekolah;

				$this->modelPendaftaran->update("data_sekolah","asal_sekolah = '".$asal_sekolah."',tanggal_masuk = '".$tanggal_masuk."',alamat_sekolah = '".$alamat_sekolah."',nama_kpl_sekolah = '".$nama_kepala_sekolah."',no_tlpn_sekolah = '".$noTelSekolah."'");

				echo 1;

			}
		}

		public function dataNilaiRapot($nisn){
			if($this->session->userdata("tipe_account") == 2){
				$query1 = $this->modelPendaftaran->read("*","WHERE nisn = '".$nisn."'","data_raport")->num_rows();
				if($query1 == 0){
					for ($i=1; $i <= 5 ; $i++) 
					{ 
						$this->modelPendaftaran->insert("data_raport(semester,nisn)", "'".$i."','".$nisn."'");
					}
						$nisn = $this->session->userdata("nisn");
						$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_raport");
						$row_data = $list_data->result_array();

						$this->load->view("user/header.php");
						$this->load->view("user/sidebar.php");
						$this->load->view("user/Data_nilai_rapot.php",["dataRaport" => $row_data, "nisn" => $nisn]);
						$this->load->view("user/footer");
					
				}else{
						$nisn = $this->session->userdata("nisn");
						$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_raport");
						$row_data = $list_data->result_array();

						$this->load->view("user/header.php");
						$this->load->view("user/sidebar.php");
						$this->load->view("user/Data_nilai_rapot.php",["dataRaport" => $row_data, "nisn" => $nisn]);
						$this->load->view("user/footer");
				}


			}
		}

		public function prosesNilaiRapot(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$mtk1 			= $obj->mtk1;
				$b_indonesia1 	= $obj->b_indonesia1;
				$b_inggris1 	= $obj->b_inggris1;
				$IPA1 			= $obj->IPA1;
				$IPS1 			= $obj->IPS1;
				$mtk2 			= $obj->mtk2;
				$b_indonesia2 	= $obj->b_indonesia2;
				$b_inggris2 	= $obj->b_inggris2;
				$IPA2 			= $obj->IPA2;
				$IPS2 			= $obj->IPS2;
				$mtk3 			= $obj->mtk3;
				$b_indonesia3 	= $obj->b_indonesia3;
				$b_inggris3 	= $obj->b_inggris3;
				$IPA3 			= $obj->IPA3;
				$IPS3 			= $obj->IPS3;
				$mtk4 			= $obj->mtk4;
				$b_indonesia4 	= $obj->b_indonesia4;
				$b_inggris4 	= $obj->b_inggris4;
				$IPA4 			= $obj->IPA4;
				$IPS4 			= $obj->IPS4;
				$mtk5 			= $obj->mtk5;
				$b_indonesia5 	= $obj->b_indonesia5;
				$b_inggris5 	= $obj->b_inggris5;
				$IPA5 			= $obj->IPA5;
				$IPS5 			= $obj->IPS5;

				$this->modelPendaftaran->update("data_raport","mtk = '".$mtk1."',bhs_indonesia = '".$b_indonesia1."',bhs_inggris = '".$b_inggris1."',ipa = '".$IPA1."',ips = '".$IPS1."' WHERE semester = 1");
				$this->modelPendaftaran->update("data_raport","mtk = '".$mtk2."',bhs_indonesia = '".$b_indonesia2."',bhs_inggris = '".$b_inggris2."',ipa = '".$IPA2."',ips = '".$IPS2."' WHERE semester = 2");
				$this->modelPendaftaran->update("data_raport","mtk = '".$mtk3."',bhs_indonesia = '".$b_indonesia3."',bhs_inggris = '".$b_inggris1."',ipa = '".$IPA3."',ips = '".$IPS3."' WHERE semester = 3");
				$this->modelPendaftaran->update("data_raport","mtk = '".$mtk4."',bhs_indonesia = '".$b_indonesia4."',bhs_inggris = '".$b_inggris1."',ipa = '".$IPA4."',ips = '".$IPS4."' WHERE semester = 4");
				$this->modelPendaftaran->update("data_raport","mtk = '".$mtk5."',bhs_indonesia = '".$b_indonesia5."',bhs_inggris = '".$b_inggris1."',ipa = '".$IPA5."',ips = '".$IPS5."' WHERE semester = 5");
				echo 1;
			}
		}

		public function dataOrganisasi($nisn){
			if($this->session->userdata("tipe_account") == 2){
		   		$query1 = $this->modelPendaftaran->read("*","WHERE nisn = '".$nisn."'","data_organisasi")->num_rows();
		   		if($query1 == 0){
		   			$this->modelPendaftaran->insert("data_organisasi(nisn)","'".$nisn."'");
		   			$nisn = $this->session->userdata("nisn");

					$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_organisasi")->result_array();


		   			$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Organisasi.php",["nisn" => $nisn, "dataOrganisasi" =>$list_data]);
					$this->load->view("user/footer");
		   		}else{
		   			$nisn = $this->session->userdata("nisn");

					$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_organisasi")->result_array();


		   			$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Organisasi.php",["nisn" => $nisn, "dataOrganisasi" =>$list_data]);
					$this->load->view("user/footer");
		   		}


			}
		}

		public function prosesdataOrganisasi(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$nisn 			 = $obj->nisn; 
				$pernah 		 = $obj->pernah;
				$nama_organisasi = $obj->nama_organisasi;
				$jbtn_organisasi = $obj->jbtn_organisasi;
				$masaperiod 	 = $obj->masaperiod;

				$this->modelPendaftaran->update("data_organisasi","pernah = '".$pernah."',nama_organisasi = '".$nama_organisasi."',jabatan = '".$jbtn_organisasi."', masa_periode = '".$masaperiod."' WHERE nisn = '".$nisn."' ");

				echo 1;
			}
		}

		public function dataPrestasi($nisn){
			if($this->session->userdata("tipe_account") == 2){
				echo $nisn;
			}
		}
	}
?>