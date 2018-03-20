<div class="col-lg-9" style="border-color: black">
          <center><h3 style="margin-top: -150px;">Data Organisasi</h3></center>
          <table>
              <tr>
                  <td width="400px" height="50px">Apakah anda pernah mengikuti organisasi ?</td>
                  <td><input type="radio" name="organisasi" id="ya" class="pernah" <?php if($dataOrganisasi[0]['pernah'] == 'Ya') echo "checked='checked'";?> value="Ya" > Ya
                  <input type="radio" name="organisasi" id="tidak" class="pernah" <?php if($dataOrganisasi[0]['pernah'] == 'Tidak') echo "checked='checked'";?> value="Tidak"> Tidak</td>
              </tr>
          </table>

          <table id="buttonKL">
              <tr>
                <td >
                  <a href="<?php echo base_url();?>Daftar/dataNilaiRapot/<?php echo $nisn ?>"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                </td>
                <td >
                 <a href="<?php echo base_url();?>Daftar/dataPrestasi/<?php echo $nisn ?>"><button type="button" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 55px;margin-left: 87px;">Lanjut</button></a>
                </td>
              </tr>
          </table>

          <form method="post" id="dataorganisasi">
            <table>
              <tr>
                  <td>Nama Organisasi*</td>
                  <td width="600px" height="50px"><input type="text" name="nama_organisasi"  class="form-control" id="nama_organisasi" value="<?php echo $dataOrganisasi[0]['nama_organisasi']?>"></td>
              </tr>
              <tr>
                  <td>Jabatan Organisasi*</td>
                  <td width="600px" height="50px"><input type="text" name="jbtn_organisasi"  class="form-control" id="jbtn_organisasi" value="<?php echo $dataOrganisasi[0]['jabatan']?>"></td>
              </tr>
              <tr>
                  <td>Masa Periode Organisasi*</td>
                  <td width="600px" height="50px"><input type="text" name="masaperiod"  class="form-control" id="masaperiod" value="<?php echo $dataOrganisasi[0]['masa_periode']?>"></td>
              </tr>
              <tr>
                  <td >
                  <a href="<?php echo base_url();?>Daftar/dataNilaiRapot/<?php echo $nisn ?>"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                  </td>
                  <td >
                 <button type="submit" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 55px;margin-left: -80px;">Lanjut</button>
                </td>
              </tr>
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
        $("#dataorganisasi").hide();
        $("#buttonKL").hide();

        $("#ya").click(function(){
          $("#dataorganisasi").fadeIn();
          $("#buttonKL").fadeOut();
          $("#nama_organisasi").focus();
        });

        $("#tidak").click(function(){
          $("#dataorganisasi").fadeOut();
          $("#buttonKL").fadeIn();
        });


        $("#dataorganisasi").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "nisn"              : "<?php echo $nisn ?>",
                                  "pernah"            : $(".pernah").val(), //$('input[name="organisasi"]:checked').val()
                                  "nama_organisasi"   : $("#nama_organisasi").val(),
                                  "jbtn_organisasi"   : $("#jbtn_organisasi").val(),
                                  "masaperiod"        : $("#masaperiod").val()
          };
          var nisn = <?php echo $nisn?>;
          var dataString = JSON.stringify(postData);

          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url();?>Daftar/prosesdataOrganisasi",
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
