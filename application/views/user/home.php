<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB - Home</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>assets/freelancer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url()?>assets/freelancer/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/freelancer/css/font1.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url()?>assets/freelancer/css/font2.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?php echo base_url()?>assets/freelancer/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>assets/freelancer/css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url()?>User" style="margin-left: -100px;">PPDB Online SMA X Palembang</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url()?>User/setting" style="color :white">Setting</a>
            </li>
            <li class="mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="<?php echo base_url()?>User/1" style="color :white">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row" style="margin-top: 200px;">
          <div class="col-md-4 col-lg-4" >
            <a href="<?php echo base_url()?>Daftar/datapribadi/<?php echo $nisn ?>">
              <img class="img-fluid" src="<?php echo base_url()?>assets/freelancer/img/portfolio/cabin.png" alt="">
             <center> <h3 style="background-color: #2C3E50; color :white">FORMULIR PENDAFTARAN</h3></center>
            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="<?php echo base_url()?>User/datainformasi">
              <img class="img-fluid" src="<?php echo base_url()?>assets/freelancer/img/portfolio/cake.png" alt="">
              <center> <h3 style="background-color: #2C3E50; color :white">INFORMASI PENDAFTARAN</h3></center>
            </a>
          </div>
          <div class="col-md-4 col-lg-4">
            <a href="<?php echo base_url()?>User/dataPengumumanverifikasi">
              <img class="img-fluid" src="<?php echo base_url()?>assets/freelancer/img/portfolio/circus.png" alt="">
              <center> <h3 style="background-color: #2C3E50; color :white">PENGUMUMAN SELEKSI</h3></center>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>
    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url()?>assets/freelancer/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/freelancer/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url()?>assets/freelancer/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/freelancer/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php echo base_url()?>assets/freelancer/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url()?>assets/freelancer/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url()?>assets/freelancer/js/freelancer.min.js"></script>

  </body>

</html>

<!-- <script type="text/javascript">
  $(document).ready(function(){
      $("#pendaftaran").click(function(){
          window.location.href = "<?php echo site_url();?>User/datapribadi";
      }) 
  });
</script> -->
