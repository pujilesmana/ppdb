<div class="col-lg-9">
        <center><h3 style="margin-top: -150px;">Data Kesehatan</h3></center>
        <form method="post" id="dataKesehatan"></form>
          <table>
              <tr>
                  <td>Nama Dokter</td>
                  <td width="600px" height="50px"><input type="text" name="nama_dokter"  class="form-username form-control" id="nama_dokter" value="<?= $dataKesehatan->nama_dokter ?>"></td>
              </tr>
              <tr>
                  <td>Rumah Sakit</td>
                  <td width="600px" height="50px"><input type="text" name="rumahsakit"  class="form-username form-control" id="rumahsakit" value="<?= $dataKesehatan->rumah_sakit ?>"></td>
              </tr>
              <tr>
                  <td height="50px">Penyakit Jantung</td>
                  <td><input type="radio" name="jantung" id="jantung" value="ya" <?php if($dataKesehatan->penyakit_jantung == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="jantung" id="jantung" value="tidak" <?php if($dataKesehatan->penyakit_jantung == 'tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td height="50px">Penyakit Kanker</td>
                  <td><input type="radio" name="kanker" id="kanker" value="ya" <?php if($dataKesehatan->penyakit_kanker == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="kanker" id="kanker" value="tidak" <?php if($dataKesehatan->penyakit_kanker == 'tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td width="350px" height="50px">Penyakit Kelainan Psikologis</td>
                  <td><input type="radio" name="kelainanPsikologis" id="kelainanPsikologis" value="Ya" <?php if($dataKesehatan->penyakit_kelainan_psikologis == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="kelainanPsikologis" id="kelainanPsikologis" value="Tidak" <?php if($dataKesehatan->penyakit_kelainan_psikologis == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td height="50px">Kelainan Saraf</td>
                  <td><input type="radio" name="kelainanSaraf" id="kelainanSaraf" value="Ya" <?php if($dataKesehatan->kelainan_saraf == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="kelainanSaraf" id="kelainanSaraf" value="Tidak" <?php if($dataKesehatan->kelainan_saraf == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td height="50px">Kelainan Darah</td>
                  <td><input type="radio" name="kelainanDarah" id="kelainanDarah" value="Ya" <?php if($dataKesehatan->kelainan_darah == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="kelainanDarah" id="kelainanDarah" value="Tidak" <?php if($dataKesehatan->kelainan_darah == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td height="50px">Pernah Operasi</td>
                  <td><input type="radio" name="operasi" id="operasi" value="Ya" <?php if($dataKesehatan->pernah_operasi == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="operasi" id="operasi" value="Tidak" <?php if($dataKesehatan->pernah_operasi == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td width="150px" height="50px">Masa pengobatan</td>
                  <td><input type="radio" name="masaPengobatan" id="masaPengobatan" value="Ya" <?php if($dataKesehatan->masa_pengobatan == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="masaPengobatan" id="masaPengobatan" value="Tidak" <?php if($dataKesehatan->masa_pengobatan == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td height="50px">Bantuan Medis</td>
                  <td><input type="radio" name="bantuanMedis" id="bantuanMedis" value="Ya" <?php if($dataKesehatan->bantuan_medis == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="bantuanMedis" id="bantuanMedis" value="Tidak" <?php if($dataKesehatan->bantuan_medis == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td height="50px">Perhatian Fisik</td>
                  <td><input type="radio" name="perhatianFisik" id="perhatianFisik" value="Ya" <?php if($dataKesehatan->perhatian_fisik == 'ya') echo "checked='checked'";?>> Ya
                  <input type="radio" name="perhatianFisik" id="perhatianFisik" value="Tidak" <?php if($dataKesehatan->perhatian_fisik == 'Tidak') echo "checked='checked'";?>> Tidak</td>
              </tr>
              <tr>
                  <td>
                  <a href="<?php echo base_url();?>Daftar/dataOrangTua/<?php echo $nisn?>"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 40px; margin-right:0px;">Kembali</button></a>
                  </td>
                  <td >
                  <button type="submit" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 40px;margin-left:-200px;">Lanjut</button>
                </td>
              </tr>
              </tr>
          </table>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
     <script type="text/javascript">
      toastr.options.preventDuplicates = true;
      toastr.options.timeOut = 500;

      $(document).ready(function(){
        $("#dataKesehatan").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "nisn"                    : "<?php echo $nisn ?>",
                                  "nama_dokter"             : $("#nama_dokter").val(),
                                  "rumahsakit"              : $("#rumahsakit").val(),
                                  "jantung"                 : $("#jantung").val(),
                                  "kanker"                  : $("#kanker").val(),
                                  "kelainanPsikologis"      : $("#kelainanPsikologis").val(),
                                  "kelainanSaraf"           : $("#kelainanSaraf").val(),
                                  "kelainanDarah"           : $("#kelainanDarah").val(),
                                  "operasi"                 : $("#operasi").val(),
                                  "masaPengobatan"          : $("#masaPengobatan").val(),
                                  "bantuanMedis"            : $("#bantuanMedis").val(),
                                  "perhatianFisik"          : $("#perhatianFisik").val()

          };
          var nisn = <?php echo $nisn?>;
          var dataString = JSON.stringify(postData);
          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url()?>Daftar/prosesDataKesehatan",
                                data  : {myData : dataString},
                         beforeSubmit : function(data){ },
                              success : function(data){
                                            if(data == 0){
                                                 alert("belum valid");    
                                            }
                                           else if(data == 1){   
                                                   toastr.success("Data orang tua telah ditambahkan","Berhasil :)");
                                                   window.location.href = "<?php echo base_url()?>Daftar/dataOrangTua/"+ nisn;
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