        <div class="col-lg-9" style="border-color: black">
          <center>
          <h3 style="margin-top: -150px;">Data Pribadi</h3></center>
          <form id="datapribadi" method="post">
          <table>
              <tr>
                  <td>Nama Lengkap</td>
                  <td width="1000px" height="50px"><input type="text" name="form-username"  class="form-control" id="nama_lengkap" value = "<?php echo $dataPribadi[0]['nama']?>" required></td>
              </tr>
              <tr>
                  <td>Alamat</td>
                  <td width="1000px" height="50px"><input type="text" name="form-address"  class="form-control" id="alamat" value = "<?php echo $dataPribadi[0]['alamat']?>" required></td>
              </tr>
              <tr>
                  <td>Jenis Kelamin</td>
                  <td><input type="radio" name="gender" id="gender" value="male" <?php if($dataPribadi[0]['gender'] == 'male') echo "checked='checked'";?> required> Laki-laki
                  <input type="radio" name="gender" id="gender" value="female" <?php if($dataPribadi[0]['gender'] == 'female') echo "checked='checked'";?> required> Perempuan</td>
              </tr>
              <tr>
              <tr>
                  <td>Tanggal Lahir</td>
                  <td width="1000px" height="50px"><input type="date" name="formdate"  class="form-control" id="tanggal_l" value = "<?php echo $dataPribadi[0]['tgl_lahir']?>" required></td>
              </tr>
              <tr>
                  <td>Tempat Lahir</td>
                  <td width="1000px" height="50px"><input type="text" name="formdate1"  class="form-control" id="tempat_l" value = "<?php echo $dataPribadi[0]['tmpt_lahir']?>" required></td>
              </tr>
              <tr>
                  <td>Kewarganegaraan</td>
                  <td width="1000px" height="50px"><input type="text" name="form-kewarganegaraan" placeholder="Indonesia" class="form-control" id="kewarganegaraan" value = "<?php echo $dataPribadi[0]['kewarganegaraan']?>" required></td>
              </tr>
              <tr>
                  <td>Agama</td>
                  <td>  
                 <select style="width: 700px; height: 40px;" id ="agama" required>
                 <option nama="agama" value = "<?php echo $dataPribadi[0]['agama']?>"><?php echo $dataPribadi[0]['agama']?></option>
                 <option nama="agama" value="Islam">Islam</option>
                 <option nama="agama" value="Kristen">Kristen</option>
                 <option nama="agama" value="Budha">Budha</option>
                 <option nama="agama" value="Hindu">Hindu</option>
                 </select></td>
              </tr>
              <tr>
                  <td>Golongan Darah</td>
                  <td height="50px"><select style="width: 700px; height: 40px;" id="gol_darah" required>
                 <option nama="agama" value = "<?php echo $dataPribadi[0]['gol_darah']?>"><?php echo $dataPribadi[0]['gol_darah']?></option>
                 <option nama="golongan_darah" value="A">A</option>
                 <option nama="golongan_darah" value="B">B</option>
                 <option nama="golongan_darah" value="AB">AB</option>
                 <option nama="golongan_darah" value="O">O</option>
                 </select></td>
              </tr>
              <tr>
                  <td>Berat Badan</td>
                  <td width="1000px" height="50px"><input type="text" name="form-bb" placeholder="Dalam kg" class="form-control" id="bb" value = "<?php echo $dataPribadi[0]['berat_badan']?>" required></td>
              </tr>
              <tr>
                  <td>Tinggi Badan</td>
                  <td width="1000px" height="50px"><input type="text" name="form-tinggi" placeholder="Dalam cm" class="form-control" id="tinggi" value = "<?php echo $dataPribadi[0]['tinggi']?>" required></td>
              </tr>
              <tr>
                  <td>Kota</td>
                  <td width="1000px" height="50px"><input type="text" name="form-kota" class="form-control" id="kota" value = "<?php echo $dataPribadi[0]['kota']?>" required></td>
              </tr>
              <tr>
                  <td>No Telepon</td>
                  <td width="1000px" height="50px"><input type="text" name="form-noTel"  class="form-control" id="noTel" value = "<?php echo $dataPribadi[0]['no_telepon']?>" required></td>
              </tr>
                  <td >
                  <button type="submit" class="btn btn-success" id="datapribadi" style=" margin-bottom:  200px; margin-top: 40px;margin-left: 0px;">Lanjut</button>
                </td>
            </table>
          </form>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container --> 
    <script type="text/javascript">
      toastr.options.preventDuplicates = true;
      toastr.options.timeOut = 500;

      $(document).ready(function(){
        $("#datapribadi").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "nama_lengkap"    : $("#nama_lengkap").val(),
                                  "alamat"          : $("#alamat").val(),
                                  "jenis_kelamin"   : $("#gender").val(),
                                  "tanggal_lahir"   : $("#tanggal_l").val(),
                                  "tempat_lahir"    : $("#tempat_l").val(),
                                  "kewarganegaraan" : $("#kewarganegaraan").val(),
                                  "agama"           : $("#agama").val(),
                                  "gol_darah"       : $("#gol_darah").val(),
                                  "berat_badan"     : $("#bb").val(),
                                  "tinggi"          : $("#tinggi").val(),
                                  "kota"            : $("#kota").val(),
                                  "noTel"           : $("#noTel").val(),
                                  "nisn"            : "<?php echo $dataPribadi[0]['nisn']?>"

          };
          var nisn = <?php echo $dataPribadi[0]['nisn']?>;
          var dataString = JSON.stringify(postData);
          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url();?>Daftar/prosesdataPribadi",
                                data  : {myData : dataString},
                         beforeSubmit : function(data){ },
                              success : function(data){
                                            if(data == 0){
                                                 alert("belum valid");    
                                            }
                                           else if(data == 1){   
                                                   toastr.success("Data pribadi telah ditambahkan","Berhasil :)");
                                                   window.location.href = "<?php echo base_url()?>Daftar/dataSekolah/"+ nisn;
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
