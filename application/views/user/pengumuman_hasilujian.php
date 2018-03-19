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