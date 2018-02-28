        <!-- /.col-lg-3 -->

        <div class="col-lg-9" style="border-color: black">

          <h3>Data Prestasi</h3>
          <table>
              <tr>
                  <td width="500px" height="50px">Apakah Anda Memiliki Prestasi di luar sekolah?*</td>
                  <td><input type="radio" name="gender" value="male"> Ya
                  <input type="radio" name="gender" value="female"> Tidak</td>
              </tr>
              <tr>
                  <td>Nama Kejuaraan*</td>
                  <td width="400px" height="50px"><input type="text" name="form-address"  class="form-username form-control" id="form-addres"></td>
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
        


        </div>
        <!-- /.col-lg-9 -->


      </div>
      <!-- /.row -->

    </div>