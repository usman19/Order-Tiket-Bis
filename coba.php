<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<form action="coba.php" method="post">
	<input type="text" name="nama"><br>
	<input type="text" name="email"><br>
	<input type="text" name="tujuan"><br>
	<input type="submit" name="kirim">
</form> 

<?php 
if (isset($_POST['kirim'])) {
    include "koneksi.php";
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    
    $tujuan = $_POST['tujuan'];
    
    $input = mysqli_query($conn, "INSERT INTO pesan (nama, email, tujuan) VALUES (NULL,'$nama','$email','$tujuan')");
    if ($input) {
      echo "berhasil";
    } 
}
 ?>
</body>
</html>