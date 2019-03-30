<!DOCTYPE html>
<html>
<head>
	<title>Bukti</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
<link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

		<ul id="slide-out" class="side-nav">

 	<div class="user-view">
 		<div class="background">
 			<img src="ebob.jpg">
 		</div>
 		<a href="#"><img class="circle" src="bis2.jpg"></a>
 		<a href="#"><span class="white-text name">Sigit Joko</span></a>
 		<a href="#"><span class="white-text email" >SigitJoko@gmail.com</span></a>
 	</div>

    <li><a href="admin.php" class="waves-effect"><i class="material-icons">home</i>Awal</a></li>
    <li><a href="data.php" class="waves-effect"><i class="material-icons">data_usage</i>Data</a></li>
    <li><a href="bukti.php" class="waves-effect"><i class="material-icons">monetization_on</i>Bukti Pembayaran</a></li>
    <li><a href="cust.php"><i class="material-icons">loyalty</i>Pelanggan</a></li>
    <li><a href="logout.php" class="waves-effect"><i class="material-icons">exit_to_app</i>Logout</a></li>
  </ul>
  
  		<a href="#" class="btn btn-floating btn-large pulse" data-activates="slide-out"><i class="material-icons">menu</i></a>

	<div class="container">
			<table class="striped">
				<tr>
					<th>ID</th>
					<th>Email</th>
					<th>Gambar</th>
					<th>Hapus</th>
				</tr>

				<?php include'koneksi.php'; 

					$query = mysqli_query($conn, "SELECT * FROM tb_gambar");

					while ($data = mysqli_fetch_assoc($query)) {
					
					$id = $data['id'];

					/*echo "
				<tr>
					<td>".$id."</td>
					<td>".$data['email']."</td>
					<td>".$data['gambar']."</td>
					<td><a href='hapus2.php?id=$id' ><i class='material-icons'>delete</i></a></td>	
				</tr>


				";*/
				echo "<tr>";
				echo "<td>".$id."</td>";
				echo "<td>".$data['email']."</td>";
				echo "<td> <img src='upload/".$data['gambar']."' width='20px'/> </td>";
				echo "<td><a href='hapus2.php?id=$id' ><i class='material-icons'>delete</i></a></td>";

				echo "</tr>";
					}
				 ?>
			</table>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='materialize/js/materialize.min.js'></script>
    <script>
    	$(document).ready(function(){
    		$(".btn").sideNav();

    	});
    </script>
</body>
</html>