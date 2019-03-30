<?php 

	if(isset($_GET['id'])){


			include('koneksi.php');

				$id = $_GET['id'];	

			$cek = mysqli_query($conn,"SELECT id FROM  tb_gambar WHERE id ='$id'");


if (mysqli_num_rows($cek)==0){
		echo '<script>windows.history.back()</script>';
		}else {

			$del = mysqli_query($conn,"DELETE FROM tb_gambar WHERE id = '$id'");
			if ($del){
				echo '<META HTTP-EQUIV="Refresh" Content="0; URL=bukti.php">';
			}
		}
	}




 ?>