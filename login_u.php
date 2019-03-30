<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body >
<br>
<div class="container">
	   
	<form action="" method="post">
		<div class="input-field">
			<input type="text" name="username" >
			<label><i class="material-icons">account_circle</i>username</label>
		</div>
		<div class="input-field">
			<input type="password" name="password">
			<label><i class="material-icons">lock</i>password</label>
		</div>
		<input type="submit" name="kirim" placeholder="username" class="btn">
		<div class="btn  grey lighten-1">
			<a href="daftar.php">Daftar Akun</a>
		</div>
	</form>
		
</div>
	




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='materialize/js/materialize.min.js'></script>
<?php 
include('koneksi.php');
		if(isset($_POST['kirim'])){
			$username = $_POST['username'];
			$password = $_POST['password'];

			$query = mysqli_query($conn,"SELECT * FROM  tb_cust  WHERE username = '$username' AND password = '$password' ");
			$hasil = mysqli_fetch_array($query);
			$cek = mysqli_num_rows($query);
			if ($cek > 0)
			{
				  echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pesan.php">';
			} else {
				echo "<script>alert('Anda kurang beruntung, Anda gagal login ')</script>";
			}
		}

 ?>
</body>
</html>