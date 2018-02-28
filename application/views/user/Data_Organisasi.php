        <!-- /.col-lg-3 -->

        <div class="col-lg-9" style="border-color: black">

          <h3>Data Organisasi</h3>
          <table>
              <tr>
                  <td width="400px" height="50px">Apakah anda pernah mengikuti organisasi ?</td>
                  <td><input type="radio" name="organisasi" value="Ya"> Ya
                  <input type="radio" name="organisasi" value="Tidak"> Tidak</td>
              </tr>
              <tr>
                  <td>Nama Organisasi*</td>
                  <td width="600px" height="50px"><input type="text" name="form-organisasi"  class="form-organisasi
                    form-control" id="form-organisasi"></td>
              </tr>
              <tr>
                  <td>Jabatan Organisasi*</td>
                  <td width="600px" height="50px"><input type="text" name="form-jabatano"  class="form-jabatano form-control" id="form-jabatano"></td>
              </tr>
              <tr>
                  <td>Masa Periode Organisasi*</td>
                  <td width="600px" height="50px"><input type="text" name="form-masaperiod"  class="form-masaperiod form-control" id="form-masaperiod"></td>
              </tr>
              <tr>
                  <td >
                  <a href="<?php echo base_url();?>User/dataNilaiRapot"><button type="button" class="btn btn-primary" style=" margin-bottom:  200px; margin-top: 55px; margin-right:-100px;">Kembali</button></a>
                  </td>
                  <td >
                  <a href="<?php echo base_url();?>User/dataPrestasi"><button type="button" class="btn btn-success" style=" margin-bottom:  200px; margin-top: 55px;margin-left: -240px;">Lanjut</button></a>
                </td>
              </tr>
              <tr></tr>
          </table>
        


        </div>
        <!-- /.col-lg-9 -->


      </div>
      <!-- /.row -->

    </div>
