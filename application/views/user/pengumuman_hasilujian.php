<div class="container" style="height: 297px;">

      <div class="row" style="height: 297px;">

        <div class="col-lg-3" style="margin-top: -105px;">

          <div class="list-group">  
            <a href="<?php  echo base_url() ;?>User/dataPengumumanverifikasi" class="list-group-item">Tahap Verifikasi Berkas</a>
            <a href="<?php  echo base_url() ;?>User/dataPengumumanhasilujian" class="list-group-item">Tahap Hasil Ujian</a>

          </div>

        </div>

<div class="col-lg-9" style="border-color: black">
          <center>
          <h3 style="margin-top: -150px;">Pengumuman Hasil Ujian</h3></center>
          <?php
            if($datahasilujian[0]['kelulusan'] == 0){
          ?>

            <h5 style="margin-bottom:  450px; margin-top: 20px; font-size: 16px; color:red;">Pengumuman akan diumumkan pada tanggal 20 maret 2018</h5>
          <?php
            }elseif($datahasilujian[0]['kelulusan'] == 1){
          ?>
              <div>Selamat Anda Lulus</div>
              <button>Download berkas</button>
          <?php 
            }elseif($datahasilujian[0]['kelulusan'] == 2){ 
          ?>
            <p>Anda tidak lulus</p>
          <?php 
            }
          ?>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>  