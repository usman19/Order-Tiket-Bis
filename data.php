<!DOCTYPE html>
<html>
<head>
	<title>data</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	
  
  		

			<div class="container">
				<table class="striped">
					<tr>
						
						<th>no</th>
						<th>score</th>
						<th>text</th>
						
						
					</tr>

					<?php 
						include'koneksi.php';

						$query = mysqli_query($conn, "SELECT * FROM data");

						

						while ($data  = mysqli_fetch_assoc($query)) {
							
							$id = $data['id'];

			echo "
				<tr>
					<td>".$id."</td>
					<td>".$data['no']."</td>
					<td>".$data['score']."</td>
					<td>".$data['text']."</td>
					<td>".$data['sentimen']."</td>
					
				</tr>


				";
							
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