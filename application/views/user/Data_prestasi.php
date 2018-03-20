<div class="col-lg-9" style="border-color: black">
          <center><h3 style="margin-top: -150px;">Data Prestasi</h3></center>
          <table>
              <tr>
                  <td width="500px" height="50px">Apakah Anda Memiliki Prestasi di luar sekolah?*</td>
                  <td><input type="radio" name="gender" value="male"> Ya
                  <input type="radio" name="gender" value="female"> Tidak</td>
              </tr>
              <tr>
                  <td width="400px" height="50px">Apakah Anda Memiliki Prestasi di luar sekolah ?</td>
                  <td>
                    <input type="radio" name="prestasi" id="ya" class="pernah" <?php if($dataPrestasi[0]['pernah'] == 'Ya') echo "checked='checked'";?> value="Ya" > Ya
                    <input type="radio" name="prestasi" id="tidak" class="pernah" <?php if($dataPrestasi[0]['pernah'] == 'Tidak') echo "checked='checked'";?> value="Tidak"> Tidak
                  </td>
              </tr>
          </table>

          <table id="buttonKL">
              <tr>
                <td >
                  <a href="<?php echo base_url();?>Daftar/dataOrganisasi/<?php echo $nisn ?>"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                </td>
                <td >
                 <a href="<?php echo base_url();?>Daftar/dataPrestasi/<?php echo $nisn ?>"><button type="button" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 55px;margin-left: 87px;">Lanjut</button></a>
                </td>
              </tr>
          </table>

              <form method="post" id="dataPrestasi">
                <table>
                  <tr>
                      <td>Nama Kejuaraan*</td>
                      <td width="400px" height="50px"><input type="text" name="nama_prestasi" class="form-username form-control" id="nama_prestasi"></td>
                  </tr>
                  <tr>
                      <td>Tingkat Kejuaraan*</td>
                      <td height="50px"><select style="width: 400px; height: 40px;"">
                     <option nama="Tingkat" value="Internasional">Internasional</option>
                     <option nama="Tingkat" value="Nasional">Nasional</option>
                     <option nama="Tingkat" value="Provinsi">Provinsi</option>
                     <option nama="Tingkat" value="Kota">Kota</option>
                     <option nama="Tingkat" value="Kabupaten">Kabupaten</option>
                     <option nama="Tingkat" value="dll">Dan lain-lain</option>
                     </select></td>
                  </tr>
                  <tr>
                      <td>Juara*</td>
                     <td height="50px"><select style="width: 400px; height: 40px;"">
                     <option nama="Juara" value="1">1</option>
                     <option nama="Juara" value="2">2</option>
                     <option nama="Juara" value="3">3</option>
                     </select></td>
                  </tr>
                  <tr>
                      <td>Kategori Kegiatan*</td>
                      <td width="400px" height="50px"><input type="text" name="form-username"  class="form-username form-control" id="form-username"></td>
                  </tr>
                  <tr>
                      <td>Tahun Kegiatan*</td>
                      <td height="50px"><select style="width: 400px; height: 40px;"">
                     <option nama="tahun_kegiatan" value="2014">2014</option>
                     <option nama="tahun_kegiatan" value="2015">2015</option>
                     <option nama="tahun_kegiatan" value="2016">2016</option>
                     <option nama="tahun_kegiatan" value="2017">2017</option>
                     <option nama="tahun_kegiatan" value="2018">2018</option>
                     </select></td>
                  </tr>
                  <tr>
                      <td>Memiliki Sertifikat ?</td>
                      <td><input type="radio" name="gender" value="male"> Ya
                      <input type="radio" name="gender" value="female"> Tidak</td>
                  </tr>
                  <tr>
                      <td>Upload Berkas Sertifikat</td>
                  </tr>
                  <tr>
                  <td >
                      <a href="<?php echo base_url();?>User/dataOrganisasi"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                      </td>
                      <td >
                      <a href="<?php echo base_url();?>User/dataOrangTua"><button type="button" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 55px;margin-left: -330px;">Lanjut</button></a>
                    </td>
                  </tr>
                  <tr></tr>
                </table>
              </form> 

        </div>

      </div>
    </div>

     <script type="text/javascript">
      toastr.options.preventDuplicates = true;
      toastr.options.timeOut = 500;
      
      $(document).ready(function(){
        $("#dataPrestasi").hide();
        $("#buttonKL").hide();

        $("#ya").click(function(){
          $("#dataPrestasi").fadeIn();
          $("#buttonKL").fadeOut();
          $("#nama_prestasi").focus();
        });

        $("#tidak").click(function(){
          $("#dataPrestasi").fadeOut();
          $("#buttonKL").fadeIn();
        });


        $("#dataPrestasi").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "nisn"              : "<?php echo $nisn ?>",
                                  "pernah"            : $(".pernah").val(),
                                  "nama_organisasi"   : $("#nama_organisasi").val(),
                                  "jbtn_organisasi"   : $("#jbtn_organisasi").val(),
                                  "masaperiod"        : $("#masaperiod").val()
          };
          var nisn = <?php echo $nisn?>;
          var dataString = JSON.stringify(postData);

          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url();?>Daftar/prosesdataPrestasi",
                                data  : {myData : dataString},
                         beforeSubmit : function(data){ },
                              success : function(data){
                                            if(data == 0){
                                                 alert("belum valid");    
                                            }
                                           else if(data == 1){   
                                                   toastr.success("Data pribadi telah ditambahkan","Berhasil :)");
                                                   window.location.href = "<?php echo base_url()?>Daftar/dataPrestasi/"+ nisn;
                                            }
                              },
                                    error : function (request) {
           
                                    }
          })
        });
      })
    </script>
