<div class="col-lg-9" style="border-color: black">
          <center>
          <h3 style="margin-top: -150px;">Data Sekolah</h3></center>
        <form method="post" id="datasekolah">
          <table>
              <tr>
                  <td>Asal Sekolah*</td>
                  <td width="600px" height="50px"><input type="text" name="asalSekolah"  class="form-control" id="asalSekolah" required></td>
              </tr>
              <tr>
                  <td>Tanggal Masuk Sekolah</td>
                  <td width="600px" height="50px"><input type="date" name="tanggal_m"  class="form-control" id="tanggal_m" required></td>
              </tr>
              <tr>
                  <td>Alamat Sekolah </td>
                  <td width="600px" height="50px"><input type="text" name="alamatSekolah"  class="form-control" id="alamatSekolah" required></td>
              </tr>
              <tr>
                  <td>Nama Kepala Sekolah*</td>
                  <td width="600px" height="50px"><input type="text" name="NKsekolah"  class="form-control" id="NKsekolah" required></td>
              </tr>
              <tr>
                  <td>No Telp Sekolah*</td>
                  <td width="600px" height="50px"><input type="text" name="noTelSekolah"  class="form-control" id="noTelSekolah" required></td>
              </tr>
              <tr>
                  <td >
                  <a href="<?php echo base_url();?>Daftar/datapribadi/<?php echo $nisn?>"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                  </td>
                  <td >
                 <button type="submit" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 55px;margin-left: -60px;">Lanjut</button>
                </td>
              </tr>
              <tr></tr>
          </table>
          </form>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div> 
    <script type="text/javascript">
      toastr.options.preventDuplicates = true;
      toastr.options.timeOut = 500;

      $(document).ready(function(){
        $("#datasekolah").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "asal_sekolah"          : $("#asalSekolah").val(),
                                  "tanggal_masuk"         : $("#tanggal_m").val(),
                                  "alamat_sekolah"        : $("#alamatSekolah").val(),
                                  "nama_kepala_sekolah"   : $("#NKsekolah").val(),
                                  "noTelSekolah"          : $("#noTelSekolah").val(),
          };
          var nisn = <?php echo $nisn?>;
          var dataString = JSON.stringify(postData);
          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url();?>Daftar/prosesdataSekolah",
                                data  : {myData : dataString},
                         beforeSubmit : function(data){ },
                              success : function(data){
                                            if(data == 0){
                                                 alert("belum valid");    
                                            }
                                           else if(data == 1){   
                                                   toastr.success("Data sekolah telah ditambahkan","Berhasil :)");
                                                   window.location.href = "<?php echo base_url()?>Daftar/dataNilaiRapot/"+ nisn;
                                            }
                              },
                                    error : function (request) {
           
                                    }
          })
        });
      })
    </script>