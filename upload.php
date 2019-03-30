<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

	<div class="navbar-fixed">
      <nav class="light-blue lighten-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="index.php" class="brand-logo right">AdsiTransport</a>
          <a href="#" data-activates="mobile-menu" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class=" hide-on-med-and-down">
            <li><a href="index.php">Awal</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Kontak</a></li>
            <li><a href="logout_u.php">Logout</a></li>

          </ul>

          <ul class="side-nav" id="mobile-menu">
            <li><a href="#">Awal</a></li>
            <li><a href="#">Tentang</a></li>
            <li><a href="#">Kontak</a></li>
            
          </ul>

        </div>
      </nav>
    </div>
<br>
    <div class="container">
    		<div class="card">
    			<img src="BNI.jpg" class=" responsive-img">
    			<div class="card-content">
    				<span class="card-title">
    					Transfer Rekening Bank BNI
    				</span>
    				<p>
    					NO:0526378600
    					<br>
    					SIGIT JOKO AZIZ SAPUTRA
    				</p>
    			</div>
    		</div>
    		<br>

<form action="" method="post" enctype="multipart/form-data">
    <div class="input-field col s4">
  <i class="material-icons prefix">account_circle</i>
      <input type="email" name="email" value="" id="icon-prefix" class="validate">
        <label for="icon_prefix" data-success="berhasil" data-error="salah!">Email</label>
      </div>

    			<div class="file-field input-field">
    				<div class="btn">
    					<span>File Upload</span>
    					<input type="file" name="gambar">
    				</div>

    				<div class="file-path-wrapper">
    					<input type="text"  class="file-path">
    				</div>
                    <div>
                        <input type="submit" name="simpan" class="btn">
                    </div>
    			</div>
    		</form>
    </div>

<br>
<br>
<br>
 

 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src='materialize/js/materialize.min.js'></script>
<script>
	$(document).ready(function(){
		$('.button-collapse').sideNav();

	});
</script>

    <?php 

if (isset($_POST['simpan'])){

   $email = $_POST['email'];
   $nama_file = $_FILES['gambar']['name'];
   $source    = $_FILES['gambar']['tmp_name'];
   $folder    = './upload/';

   move_uploaded_file($source, $folder.$nama_file);
$insert = mysqli_query($conn, "INSERT INTO tb_gambar (email,gambar) 
  VALUES ('$email','$nama_file')");

   if ($insert) {
    echo "<script>alert('Terima kasih, Anda Berhasil upload')</script>";
       echo '<META HTTP-EQUIV="Refresh" Content="0; URL=upload.php">';
   } 

}
     ?>

</body>
</html>