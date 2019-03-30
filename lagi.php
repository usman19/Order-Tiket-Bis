<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
		<form action="" method="post" enctype="multipart/form-data">
			<table>
				<tr>
					<td>file</td>
					<td>:</td>
					<td><input type="text" name="nama"><br></td>
<br>

					<td>file</td>
					<td>:</td>
					<td><input type="file" name="gambar"><br></td>
<br>
					<td></td>
					<td></td>
					<td><input type="submit" name="kirim" value="kirim"></td>
				</tr>
			</table>
		</form>

<?php 
		if (isset($_POST['kirim'])) {
			$nama = $_POST['nama'];
			$nama_file = $_FILES['gambar']['name'];
			$source = $_FILES['gambar']['tmp_name'];
			$folder = './upload/';

			move_uploaded_file($source, $folder.$nama_file);
$insert = mysqli_query($conn, "INSERT INTO tb_gambar (NULL, nama, gambar) VALUES ('$nama','$nama_file')");
		} if ($insert) {
			echo "berhasil";
		} else {
			echo "gagal";
		}
 ?>



</body>
</html>