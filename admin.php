<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class=" cyan lighten-1">
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
            <div class="card  cyan darken-1">
                <div class="container">
                    <div class="card-title">
                         
                      </div>
                        <img src="mania.png" style="margin-left: 160px;">
                </div>
            </div>
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