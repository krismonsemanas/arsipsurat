<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login | Arsip Surat</title>
    <meta name="description" content="Arsip Surat">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?=base_url()?>assets/css/normalize.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/themify-icons.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="<?=base_url()?>assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <p><h2 class="text-light">Halaman Login</h2></p>
                </div>
                <div class="login-form">
                    <form method="post" action="<?=base_url()?>login/getlogin" id="login" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Your Username" autocomplete autofocus>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Your Password">
                        </div>
                        <?php
                        	$error = $this->session->flashdata('info');
                        	if (!empty($error)) {
                        		echo $error;
                        	}
                        ?>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" onclick="showPass();" id="show"> <span id="text">Show Password</span>
                            </label>
                            <label class="pull-right">
                                <a href="#">Forgotten Password?</a>
                            </label>

                        </div>
                        <button type="submit" id="btnLogin" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url()?>assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?=base_url()?>assets/js/popper.min.js"></script>
    <script src="<?=base_url()?>assets/js/plugins.js"></script>
    <script src="<?=base_url()?>assets/js/main.js"></script>
    <script src="<?=base_url()?>assets/js/jquery-3.1.1.min.js"></script>
    <script src="<?=base_url()?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript">
		function showPass() {
			var tampil = document.getElementById('password');
			var text = document.getElementById('text');
			if (tampil.type === "password") {
				tampil.type = "text";
				text.textContent = "Hide Password";
			}else{
				tampil.type = "password";
				text.textContent = "Show Password";
			}
		}
	</script>
	<script>
		$(document).ready(function () {
			$("#login").validate({
				rules: {
					username: {
						required: true
					},
					password: {
						required: true
					}
				},
				messages: {
					username: {
						required: '<br><span class="alert alert-danger" role="alert" id="alert">Inputan tidak boleh kosong!</span>'
					},
					password: {
						required: '<br><span class="alert alert-danger" role="alert" id="alert">Inputan tidak boleh kosong!</span>'
					}
				}
			});
		});
	</script>
</body>
</html>
