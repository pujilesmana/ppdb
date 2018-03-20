        <div class="col-lg-9" style="border-color: black">
          <center>
          <h3 style="margin-top: -150px;">Pengumuman Verifikasi</h3></center>
          <?php
            if($dataverifikasi[0]['verifikasi'] == 0){
          ?>
            <h5 style="margin-bottom:  450px; margin-top: 20px; font-size: 16px; color:red;">Ini akan diumumkan pada tangaal 20 maret 2018</h5>
          <?php
            }elseif($dataverifikasi[0]['verifikasi'] == 2){
          ?>
              <div>Selamat Anda Lulus</div>

              <button>Download berkas</button>
          <?php 
            }elseif($dataverifikasi[0]['verifikasi'] == 1){ 
          ?>
            <p>Anda tidak lulus Verifikasi</p>
          <?php 
            }
          ?>
        </div>
        <!-- /.col-lg-9 -->
      </div>
      <!-- /.row -->
    </div>   