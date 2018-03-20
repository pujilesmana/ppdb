<div class="col-lg-9" >
          <center><h3 style="margin-top: -150px;">Data Orang Tua</h3></center>
          <form method="post" id="dataOrangTua">
          <table>
            <h5>Data Ayah</h5>
              <tr>
                  <td>Nama</td>
                  <td width="200px" height="50px"><input type="text" name="namaAyah"  class="form-username form-control" id="namaAyah" value="<?= $dataAyah->nama ?>"></td>
              </tr>
              <tr>
                  <td>Tanggal Lahir</td>
                  <td width="200px" height="50px"><input type="text" name="tanggalAyah"  class="form-username form-control" id="tanggalAyah" value="<?= $dataAyah->tanggal_lahir ?>"></td>
              </tr>
              <tr>
                  <td>Tempat Lahir</td>
                  <td width="200px" height="50px"><input type="text" name="tempatAyah"  class="form-username form-control" id="tempatAyah" value="<?= $dataAyah->tempat_lahir ?>"></td>
              </tr>
              <tr>
                  <td>No KTP</td>
                  <td width="200px" height="50px"><input type="text" name="ktpAyah"  class="form-username form-control" id="ktpAyah" value="<?= $dataAyah->no_ktp ?>"></td>
              </tr>
              <tr>
                  <td>Alamat</td>
                  <td width="200px" height="50px"><textarea type="text" name="alamatAyah" id="alamatAyah" style="width: 700px" rows="5" value="<?= $dataAyah->alamat ?>"></textarea></td>
              </tr>
              <tr>
                  <td>No Telpon</td>
                  <td width="200px" height="50px"><input type="text" name="teleponAyah"  class="form-username form-control" id="teleponAyah" value="<?= $dataAyah->no_telp ?>"></td>
              </tr>
              <tr>
                  <td>Status</td>
                  <td><input type="radio" name="StatusAyah" value="ayah_kandung" id="StatusAyah"> Ayah Kandung
                  <input type="radio" name="StatusAyah" value="ayah" id="StatusAyah"> Ayah</td>
              </tr>
              <tr>
                  <td width="200px">Pendidikan Terakhir</td>
                  <td width="200px" height="50px"><input type="text" name="pendidikanAyah"  class="form-username form-control" id="pendidikanAyah" value="<?= $dataAyah->pendidikan_terakhir ?>"></td>
              </tr>
              <tr>
                  <td width="200px">Status Pekerjaan</td>
                  <td width="200px" height="50px"><input type="text" name="statusPekerjaanAyah"  class="form-username form-control" id="statusPekerjaanAyah" value="<?= $dataAyah->status_pekerjaan ?>"></td>
              </tr>
              <tr>
                  <td>Jenis Pekerjaan</td>
                  <td width="200px" height="50px"><input type="text" name="jenisPekerjaanAyah"  class="form-username form-control" id="jenisPekerjaanAyah" value="<?= $dataAyah->jenis_pekerjaan ?>"></td>
              </tr>
              <tr>
                  <td>Nama Perusahaan</td>
                  <td width="200px" height="50px"><input type="text" name="perusahaanAyah"  class="form-username form-control" id="perusahaanAyah" value="<?= $dataAyah->nama_perusahaan ?>"></td>
              </tr>
              <tr>
                  <td>Jabatan</td>
                  <td width="200px" height="50px"><input type="text" name="jabatanAyah"  class="form-username form-control" id="jabatanAyah" value="<?= $dataAyah->jabatan ?>"></td>
              </tr>
              <tr>
                  <td>Tahun Mulai Kerja</td>
                  <td width="200px" height="50px"><input type="text" name="tahunMulaiAyah"  class="form-username form-control" id="tahunMulaiAyah" value="<?= $dataAyah->tahun_mulai_kerja ?>"></td>
              </tr>
              <tr>
                  <td>Penghasilan</td>
                  <td width="200px" height="50px"><input type="text" name="penghasilanAyah"  class="form-username form-control" id="penghasilanAyah" value="<?= $dataAyah->pernghasilan ?>"></td>
              </tr>
          </table>
          <br><br><br>
          <table>
            <h5>Data Ibu</h5>
              <tr>
                  <td>Nama</td>
                  <td width="200px" height="50px"><input type="text" name="namaIbu"  class="form-username form-control" id="namaIbu" value="<?= $dataIbu->nama ?>"></td>
              </tr>
              <tr>
                  <td>Tanggal Lahir</td>
                  <td width="200px" height="50px"><input type="text" name="tanggalIbu"  class="form-username form-control" id="tanggalIbu" value="<?= $dataIbu->tanggal_lahir ?>"></td>
              </tr>
              <tr>
                  <td>Tempat Lahir</td>
                  <td width="200px" height="50px"><input type="text" name="tempatIbu"  class="form-username form-control" id="tempatIbu" value="<?= $dataIbu->tempat_lahir ?>"></td>
              </tr>
              <tr>
                  <td>No KTP</td>
                  <td width="200px" height="50px"><input type="text" name="ktpIbu"  class="form-username form-control" id="ktpIbu" value="<?= $dataIbu->no_ktp ?>"></td>
              </tr>
              <tr>
                  <td>Alamat</td>
                  <td width="200px" height="50px"><textarea type="text" name="alamatIbu" id="alamatIbu" style="width: 700px" rows="5" value="<?= $dataIbu->alamat ?>"></textarea></td>
              </tr>
              <tr>
                  <td>No Telpon</td>
                  <td width="200px" height="50px"><input type="text" name="teleponIbu"  class="form-username form-control" id="teleponIbu" value="<?= $dataIbu->no_telp ?>"></td>
              </tr>
              <tr>
                  <td>Status</td>
                  <td><input type="radio" name="StatusIbu" value="ibu_kandung" id="StatusIbu"> Ibu Kandung
                  <input type="radio" name="StatusIbu" value="ibu" id="StatusIbu"> Ibu</td>
              </tr>
              <tr>
                  <td width="200px">Pendidikan Terakhir</td>
                  <td width="200px" height="50px"><input type="text" name="pendidikanIbu"  class="form-username form-control" id="pendidikanIbu" value="<?= $dataIbu->pendidikan_terakhir ?>"></td>
              </tr>
              <tr>
                  <td width="200px">Status Pekerjaan</td>
                  <td width="200px" height="50px"><input type="text" name="statusPekerjaanIbu"  class="form-username form-control" id="statusPekerjaanIbu" value="<?= $dataIbu->status ?>"></td>
              </tr>
              <tr>
                  <td>Jenis Pekerjaan</td>
                  <td width="200px" height="50px"><input type="text" name="jenisPekerjaanIbu"  class="form-username form-control" id="jenisPekerjaanIbu" value="<?= $dataIbu->jenis_pekerjaan ?>"></td>
              </tr>
              <tr>
                  <td>Nama Perusahaan</td>
                  <td width="200px" height="50px"><input type="text" name="perusahaanIbu"  class="form-username form-control" id="perusahaanIbu" value="<?= $dataIbu->nama_perusahaan ?>"></td>
              </tr>
              <tr>
                  <td>Jabatan</td>
                  <td width="200px" height="50px"><input type="text" name="jabatanIbu"  class="form-username form-control" id="jabatanIbu" value="<?= $dataIbu->jabatan ?>"></td>
              </tr>
              <tr>
                  <td>Tahun Mulai Kerja</td>
                  <td width="200px" height="50px"><input type="text" name="tahunMulaiIbu"  class="form-username form-control" id="tahunMulaiIbu" value="<?= $dataIbu->tahun_mulai_kerja ?>"></td>
              </tr>
              <tr>
                  <td>Penghasilan</td>
                  <td width="200px" height="50px"><input type="text" name="penghasilanIbu"  class="form-username form-control" id="penghasilanIbu" value="<?= $dataIbu->penghasilan ?>"></td>
              </tr>
              <tr>
                  <td >
                  <a href="<?php echo base_url();?>Daftar/dataSekolah/<?php echo $nisn?>"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                  </td>
                  <td >
                  <button type="submit" class="btn btn-success" id="dataOrangTua" style=" margin-bottom:  200px; margin-top: 55px;margin-left: -80px;">Lanjut</button>
                </td>
              </tr>
              <tr></tr>
          </table>
        </form>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <br><br>
      <!-- /.row -->
    </div>
    <script type="text/javascript">
      toastr.options.preventDuplicates = true;
      toastr.options.timeOut = 500;

      $(document).ready(function(){
        $("#dataOrangTua").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "nisn"                : "<?php echo $nisn ?>",
                                  "namaAyah"            : $("#namaAyah").val(),
                                  "tanggalAyah"         : $("#tanggalAyah").val(),
                                  "tempatAyah"          : $("#tempatAyah").val(),
                                  "ktpAyah"             : $("#ktpAyah").val(),
                                  "alamatAyah"          : $("#alamatAyah").val(),
                                  "teleponAyah"         : $("#teleponAyah").val(),
                                  "StatusAyah"          : $("#StatusAyah").val(),
                                  "pendidikanAyah"      : $("#pendidikanAyah").val(),
                                  "statusPekerjaanAyah" : $("#statusPekerjaanAyah").val(),
                                  "jenisPekerjaanAyah"  : $("#jenisPekerjaanAyah").val(),
                                  "perusahaanAyah"      : $("#perusahaanAyah").val(),
                                  "jabatanAyah"         : $("#jabatanAyah").val(),
                                  "tahunMulaiAyah"      : $("#tahunMulaiAyah").val(),
                                  "penghasilanAyah"     : $("#penghasilanAyah").val(),
                                  

                                  "namaIbu"            : $("#namaIbu").val(),
                                  "tanggalIbu"         : $("#tanggalIbu").val(),
                                  "tempatIbu"          : $("#tempatIbu").val(),
                                  "ktpIbu"             : $("#ktpIbu").val(),
                                  "alamatIbu"          : $("#alamatIbu").val(),
                                  "teleponIbu"         : $("#teleponIbu").val(),
                                  "StatusIbu"          : $("#StatusIbu").val(),
                                  "pendidikanIbu"      : $("#pendidikanIbu").val(),
                                  "statusPekerjaanIbu" : $("#statusPekerjaanIbu").val(),
                                  "jenisPekerjaanIbu"  : $("#jenisPekerjaanIbu").val(),
                                  "perusahaanIbu"      : $("#perusahaanIbu").val(),
                                  "jabatanIbu"         : $("#jabatanIbu").val(),
                                  "tahunMulaiIbu"      : $("#tahunMulaiIbu").val(),
                                  "penghasilanIbu"     : $("#penghasilanIbu").val()

          };
          var nisn = <?php echo $nisn?>;
          var dataString = JSON.stringify(postData);
          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url();?>Daftar/prosesDataOrtu",
                                data  : {myData : dataString},
                         beforeSubmit : function(data){ },
                              success : function(data){
                                            if(data == 0){
                                                 alert("belum valid");    
                                            }
                                           else if(data == 1){   
                                                   toastr.success("Data orang tua telah ditambahkan","Berhasil :)");
                                                   window.location.href = "<?php echo base_url()?>Daftar/dataOrganisasi/"+ nisn;
                                            }
                                           else if(data == 2){
                                                 toastr.error("Data sudah pernah ada","MAAF :(");
                                            }
                              },
                                    error : function (request) {
           
                                    }
          })
        });
      })
    </script> 