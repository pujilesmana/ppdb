<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile</title>

	 <!-- Bootstrap core CSS -->
    <link href="assets/freelancer/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom fonts for this template -->
    <link href="freelancer/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="assets/freelancer/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="assets/freelancer/css/freelancer.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
<!-- style="border: solid 1px #6BCDFD; padding: 15px; -moz-border-radius: 15px; -khtml-border-radius: 15px; -webkit-border-radius: 15px; border-radius: 15px; margin: 0; text-align: justify; line-height: 23px; color: black; font-size: 18px" -->
          <center>
            <form method="post" id="changePassword">
            <table>
                <tr>
                  <td><h3 style="margin-top: -100px;">Ubah Password Anda :</h3></td>
                </tr>
                <tr>
                    <td width="350px">NISN</td>
                    <td width="20px" height="50px"><input type="text" name="nisn"  class="form-username form-control" id="nisn" disabled="" value="<?= $dataSiswa->nisn ?>"></td>
                </tr>
                <tr>
                    <td>Password Baru*</td>
                    <td width="200px" height="50px"><input type="password" name="password_baru"  class="form-username form-control" id="password_baru" required></td>
                </tr>
                <tr>
                    <td>Konfirmasi Password Baru*</td>
                    <td width="200px" height="50px"><input type="password" name="confirm_password_baru"  class="form-username form-control" id="confirm_password_baru" required></td>
                </tr>
                <tr>
                  <td style="margin: 50px;">
                    <button type="submit" class="btn btn-success" id="changePasswordButton" style="margin-bottom:  112px; margin-top: 55px; background-color: #EFEFEF ;color: black; border-color: #D9D9D9">Submit</button>
                  </td>
                </tr>
            </table>
          </form>
          </center>
        <!-- /.col-lg-9 -->
    </div>
</body>
</html>
<script type="text/javascript">
      toastr.options.preventDuplicates = true;
      toastr.options.timeOut = 500;

      $(document).ready(function(){
        $("#changePasswordButton").submit(function(e){
          e.preventDefault();
          var postData = {
                                  "nisn"                     : "<?php echo $nisn ?>",
                                  "password_baru"            : $("#password_baru").val(),
                                  "confirm_password_baru"    : $("#confirm_password_baru").val()
          };
          var nisn = <?php echo $nisn?>;
          var dataString = JSON.stringify(postData);
          $.ajax({
                                type  : "post",
                                dataType: "json",
                                url   : "<?php echo base_url();?>User/prosesUbahPassword",
                                data  : {myData : dataString},
                         beforeSubmit : function(data){ },
                              success : function(data){
                                            if(data == 0){
                                                 alert("belum valid");    
                                            }
                                            else if(data == 1){   
                                                   toastr.success("Password telah terubah","Berhasil :)");
                                                   window.location.href = "<?php echo base_url()?>User/home/"+ nisn;
                              },
                                    error : function (request) {
           
                                    }
          })
        });
      })
    </script> 