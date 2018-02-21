<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PPDB</title>

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/font.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo base_url()?>assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="<?php echo base_url()?>assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url()?>assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url()?>assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url()?>assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url()?>assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1>PPDB Online 2017/2018</h1>
                            <h1>SMAN X Palembang</h1>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-5" >
                        	
                        	<div class="form-box" style="">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login Form</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" class="login-form" id="form-login">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="nisn">NISN</label>
				                        	<input type="text" name="nisn" placeholder="NISN" class="form-control">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="password">Password</label>
				                        	<input type="password" name="pass" placeholder="Password..." class="form-control">
				                        </div>
				                        <button type="submit" class="btn">Login</button>
                                        <p >Belum Mempunyai Akun ?<a href="<?php echo base_url()?>Main/register"><strong> Daftar  </strong></a></p>
				                    </form>
			                    </div>
		                    </div>
                        	
                    </div>
                    
                </div>
            </div>
            
        </div>

    </body>

</html>
<script src="<?php echo base_url()?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.backstretch.min.js"></script>
<script src="<?php echo base_url()?>assets/js/scripts.js"></script>


<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/codeseven/toastr.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/codeseven/toastr.min.css" />
<script src="<?php echo base_url(); ?>assets/js/codeseven/toastr.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/codeseven/toastr.js"></script>  

<script type="text/javascript">
    toastr.options.preventDuplicates = true;
    toastr.options.timeOut = 500;

    $(document).ready(function(){
        $("#form-login").on('submit',function(e){
            e.preventDefault();
            $.ajax({
                type : "post",
                url  : "<?php echo site_url()?>Main/1",
                data : $('#form-login').serialize(),
                beforeSubmit : function(data){ },
                success      : function(data)
                {
                    if(data == 0){
                        toastr.error("username dan password tidak ditemukan","MAAF");
                    }
                    else if(data == 1){
                        // toastr.success("Selamat datang di website PPDB","Berhasil");
                        window.location.href = "<?php echo site_url()?>User";
                    }
                },
                error : function(data){}
            })
        })
    });
</script>