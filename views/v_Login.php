<!DOCTYPE html>
<html>
	<head>Selamat Datang di Website kami</head>
<body>
	LOGIN PAGE
	<?php echo form_open('Login/login');?>
	<form action="" method="post">
	<input type="text" name="username"><br>
	<input type="password" name="password"><br>
	<button type="submit" name="submit">LOGIN</button>
	</form>
	
	Silahkan mendaftar terlebih dahulu jika belum punya akun
	<?php echo form_open('Register/register');?>
	<form action="" method="post">
	<button type="submit" name="submit">Register</button>
	</form>
</body>
</html>