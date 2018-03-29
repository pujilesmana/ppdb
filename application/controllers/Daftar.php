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
				}
				else{
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
		   		$query1 = $this->modelPendaftaran->read("*","WHERE nisn = '".$nisn."'","data_prestasi")->num_rows();
		   		if($query1 == 0){
		   			$this->modelPendaftaran->insert("data_prestasi(nisn)","'".$nisn."'");
		   			$nisn = $this->session->userdata("nisn");

					$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_prestasi")->result_array();


		   			$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Prestasi.php",["nisn" => $nisn, "dataPrestasi" =>$list_data]);
					$this->load->view("user/footer");
		   		}else{
		   			$nisn = $this->session->userdata("nisn");

					$list_data = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_prestasi")->result_array();

		   			$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Prestasi.php",["nisn" => $nisn, "dataPrestasi" =>$list_data]);
					$this->load->view("user/footer");
		   		}


			}
		}

		public function prosesdataPrestasi(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$nisn 				= $obj->nisn;
				$pernah 			= $obj->pernah;
				$nama_kejuaraan 	= $obj->nama_prestasi;
				$tingkat_kejuaraan 	= $obj->tingkat_kejuaraan;
				$juara 				= $obj->juara;
				$ktgr_kegiatan 		= $obj->ktgr_kegiatan;
				$tahun_kegiatan 	= $obj->tahun_kegiatan;
				$sertifikat 		= $obj->sertifikat;

				$this->modelPendaftaran->update("data_prestasi","pernah = '".$pernah."',nama_kejuaraan = '".$nama_kejuaraan."',tingkat_kejuaraan = '".$tingkat_kejuaraan."', juara = '".$juara."', kategori_kegiatan = '".$ktgr_kegiatan."', tahun = '".$tahun_kegiatan."', sertifikat = '".$sertifikat."' WHERE nisn = '".$nisn."' ");
				echo 1;

			}
		}

		public function dataOrangTua($nisn){
			if($this->session->userdata("tipe_account") == 2){
				$query1 = $this->modelPendaftaran->read("*","WHERE nisn = '".$nisn."'","data_ortu_a")->num_rows();
				if($query1 == 0){
		   			$this->modelPendaftaran->insert("data_ortu_a(nisn,gender)","'".$nisn."','pria'");
		   			$this->modelPendaftaran->insert("data_ortu_a(nisn,gender)","'".$nisn."','wanita'");
		   			$nisn = $this->session->userdata("nisn");

					$list_dataAyah = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."' and gender= 'pria'","data_ortu_a")->row();
					$list_dataIbu = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."' and gender='wanita'","data_ortu_a")->row();


		   			$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Pribadi_Ortu.php",["nisn" => $nisn, "dataAyah" =>$list_dataAyah, "dataIbu" => $list_dataIbu]);
					$this->load->view("user/footer");
		   		}
		   		else{
		   			$nisn = $this->session->userdata("nisn");

					$list_dataAyah = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."' and gender='pria'","data_ortu_a")->row();
					$list_dataIbu = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."' and gender='wanita'","data_ortu_a")->row();

					
					$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Pribadi_Ortu.php",
						["nisn" => $nisn,
						"dataAyah" =>$list_dataAyah,
						"dataIbu" => $list_dataIbu]);
					$this->load->view("user/footer");
		   		}
				
			}
		}

		public function prosesDataOrtu(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$nisn 			 		= $obj->nisn; 
				$namaAyah 				= $obj->namaAyah;
				$tanggalAyah	 		= $obj->tanggalAyah;
				$tempatAyah		 		= $obj->tempatAyah;
				$ktpAyah				= $obj->ktpAyah;
				$alamatAyah 			= $obj->alamatAyah;
				$teleponAyah 			= $obj->teleponAyah;
				$StatusAyah 			= $obj->StatusAyah;
				$pendidikanAyah			= $obj->pendidikanAyah;
				$statusPekerjaanAyah	= $obj->statusPekerjaanAyah;
				$jenisPekerjaanAyah		= $obj->jenisPekerjaanAyah;
				$perusahaanAyah			= $obj->perusahaanAyah;
				$jabatanAyah			= $obj->jabatanAyah;
				$tahunMulaiAyah			= $obj->tahunMulaiAyah;
				$penghasilanAyah		= $obj->penghasilanAyah;

				$namaIbu 				= $obj->namaIbu;
				$tanggalIbu	 			= $obj->tanggalIbu;
				$tempatIbu		 		= $obj->tempatIbu;
				$ktpIbu					= $obj->ktpIbu;
				$alamatIbu 				= $obj->alamatIbu;
				$teleponIbu 			= $obj->teleponIbu;
				$StatusIbu 				= $obj->StatusIbu;
				$pendidikanIbu			= $obj->pendidikanIbu;
				$statusPekerjaanIbu		= $obj->statusPekerjaanIbu;
				$jenisPekerjaanIbu		= $obj->jenisPekerjaanIbu;
				$perusahaanIbu			= $obj->perusahaanIbu;
				$jabatanIbu				= $obj->jabatanIbu;
				$tahunMulaiIbu			= $obj->tahunMulaiIbu;
				$penghasilanIbu			= $obj->penghasilanIbu;

				$this->modelPendaftaran->update("data_ortu_a","nama = '".$namaAyah."',tanggal_lahir = '".$tanggalAyah."',tempat_lahir = '".$tempatAyah."',no_ktp = '".$ktpAyah."',alamat = '".$alamatAyah."', no_telp = '".$teleponAyah."', status = '".$StatusAyah."', pendidikan_terakhir = '".$pendidikanAyah."', status_pekerjaan = '".$statusPekerjaanAyah."', jenis_pekerjaan = '".$jenisPekerjaanAyah."', nama_perusahaan = '".$perusahaanAyah."', jabatan = '".$jabatanAyah."', tahun_mulai_kerja = '".$tahunMulaiAyah."', penghasilan = '".$penghasilanAyah."' WHERE gender = 'pria' and nisn = '".$nisn."'");

				$this->modelPendaftaran->update("data_ortu_a","nama = '".$namaIbu."',tanggal_lahir = '".$tanggalIbu."',tempat_lahir = '".$tempatIbu."',no_ktp = '".$ktpIbu."',alamat = '".$alamatIbu."', no_telp = '".$teleponIbu."', status = '".$StatusIbu."', pendidikan_terakhir = '".$pendidikanIbu."', status_pekerjaan = '".$statusPekerjaanIbu."', jenis_pekerjaan = '".$jenisPekerjaanIbu."', nama_perusahaan = '".$perusahaanIbu."', jabatan = '".$jabatanIbu."', tahun_mulai_kerja = '".$tahunMulaiIbu."', penghasilan = '".$penghasilanIbu."' WHERE gender = 'wanita' and nisn = '".$nisn."'");

				echo 1;
			}
		}

		public function dataKesehatan($nisn){
			if($this->session->userdata("tipe_account") == 2){
				$query1 = $this->modelPendaftaran->read("*","WHERE nisn = '".$nisn."'","data_kesehatan")->num_rows();
				if($query1 == 0){
		   			$this->modelPendaftaran->insert("data_kesehatan(nisn)","'".$nisn."'");
		   			$nisn = $this->session->userdata("nisn");

					$list_kesehatan = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_kesehatan")->row();


		   			$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Kesehatan.php",["nisn" => $nisn, "dataKesehatan" =>$list_kesehatan]);
					$this->load->view("user/footer");
		   		}
		   		else{
		   			$nisn = $this->session->userdata("nisn");

					$list_kesehatan = $this->modelPendaftaran->read("*","WHERE nisn='".$nisn."'","data_kesehatan")->row();
					
					$this->load->view("user/header.php");
					$this->load->view("user/sidebar.php");
					$this->load->view("user/Data_Kesehatan.php",["nisn" => $nisn, "dataKesehatan" =>$list_kesehatan]);
					$this->load->view("user/footer");
		   		}
				
			}
		}

		public function prosesDataKesehatan(){
			if($this->session->userdata("tipe_account") == 2){
				$obj = json_decode($_POST['myData']);
				$nisn 			 		= $obj->nisn; 
				$nama_dokter			= $obj->nama_dokter;
				$rumahsakit				= $obj->rumahsakit;
				$jantung				= $obj->jantung;
				$kanker					= $obj->kanker;
				$kelainanPsikologis		= $obj->kelainanPsikologis;
				$kelainanSaraf			= $obj->kelainanSaraf;
				$kelainanDarah			= $obj->kelainanDarah;
				$operasi				= $obj->operasi;
				$masaPengobatan			= $obj->masaPengobatan;
				$bantuanMedis			= $obj->bantuanMedis;
				$perhatianFisik			= $obj->perhatianFisik;

				$this->modelPendaftaran->update("data_kesehatan","nama_dokter = '".$nama_dokter."',rumah_sakit = '".$rumahsakit."',penyakit_jantung = '".$jantung."',penyakit_kanker = '".$kanker."',penyakit_kelainan_psikologis = '".$kelainanPsikologis."', kelainan_saraf = '".$kelainanSaraf."', kelainan_darah = '".$kelainanDarah."', pernah_operasi = '".$operasi."', masa_pengobatan = '".$masaPengobatan."', bantuan_medis = '".$bantuanMedis."', perhatian_fisik = '".$perhatianFisik."' WHERE nisn = '".$nisn."'");
				echo 1;
			}
		}
	}
?>