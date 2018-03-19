<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/matrix-media.css" />
<link href="<?php echo base_url()?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li class=""><a title="" href="<?php echo base_url()?>Admin/logout"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>



<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Data Peserta</a>
  <ul>
    <li class="active"><a href="tables.html"><i class="icon icon-th"></i> <span>Data Peserta</span></a></li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Peserta</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data peserta</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Peserta</th>
                  <th>Pendaftaran</th>
                  <th>Verifikasi</th>
                  <th>Kelulusan</th>
                </tr>
              </thead>
              <tbody>
          		<?php
          				$size = sizeof($datapeserta);
          				for($i=0;$i<$size;$i++){
          		?>
          		<tr>
          			<td style="text-align: center;"><?php echo $i+1; ?></td>
          			<td style="text-align: center;"><?php echo $datapeserta[$i]['username']?></td>
          			<td style="text-align: center;">
          				<?php
          					if($datapeserta[$i]['daftar'] == 0){
          				?>
          					<img src="<?php echo base_url()?>assets/img/delete.png" title="Belum terdaftar">
          				<?php 
          					}else if($datapeserta[$i]['daftar'] == 1){
          				?>
          					<img src="<?php echo base_url()?>assets/img/ok.png" title="Sudah terdaftar">
          				<?php }?>
          			</td>
          			<td style="text-align: center;">          				
          				<?php 
          					if($datapeserta[$i]['verifikasi'] == 1){
          				?>
          				  <a href="<?php echo base_url()?>Data/verifikasi/verify/<?php echo $datapeserta[$i]['nisn']?>"><button class="btn btn-primary">Verifikasi!!</button></a>
          				<?php
          					}else if($datapeserta[$i]['verifikasi'] == 2){
          				?>
          				   Telah diverifikasi
          				   <a href="<?php echo base_url()?>Data/verifikasi/pembatalan/<?php echo $datapeserta[$i]['nisn']?>"><button class="btn btn-danger" style="margin-left: 15px;">Batal</button></a>
          				<?php
          					}
          				?>
          			</td>
          			<td style="text-align: center;">
          				<?php 
          					if($datapeserta[$i]['kelulusan'] == 0){
          				?>
          				  		<a href="<?php echo base_url()?>Data/kelulusan/lulus/<?php echo $datapeserta[$i]['nisn']?>"><button class="btn btn-primary">Lulus</button></a>
          				  		<a href="<?php echo base_url()?>Data/kelulusan/tidaklulus/<?php echo $datapeserta[$i]['nisn']?>"><button class="btn btn-danger">Tidak Lulus</button></a>
          				<?php
          					}else if($datapeserta[$i]['kelulusan'] == 1){
          				?>
          				  		 Lulus
          				  		 <a href="<?php echo base_url()?>Data/kelulusan/pembatalan/<?php echo $datapeserta[$i]['nisn']?>"><button class="btn btn-danger" style="margin-left: 44px;">Batal</button></a>
          				<?php
          					}else if($datapeserta[$i]['kelulusan'] == 2){
          				?>
          						Tidak lulus
          						<a href="<?php echo base_url()?>Data/kelulusan/pembatalan/<?php echo $datapeserta[$i]['nisn']?>"><button class="btn btn-danger" style="margin-left: 15px;">Batal</button></a>
          				<?php
          					}
          				?>
          			</td>
          		</tr>
          		<?php }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url()?>assets/admin/js/jquery.min.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/select2.min.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/matrix.js"></script> 
<script src="<?php echo base_url()?>assets/admin/js/matrix.tables.js"></script>
</body>
</html>
