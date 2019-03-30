<html>
  <head>

    <title>Daftar</title>
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
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            

          </ul>

          <ul class="side-nav" id="mobile-menu">
            <li><a href="index.php">Awal</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            
          </ul>

        </div>
      </nav>
    </div>
    <br>
    <form method="post" action="daftar.php">
    <div class="row">
      <div class="input-field col s4">
        <input type="text" name="nama" value="">
        <label for="">Nama</label>
      </div>

      
      <div class="row">
      <div class="input-field col s4">
        <input id="input_text" type="text" name="alamat" data-length="50">
        <label for="input_text">Alamat</label>
      </div>

      <div class="input-field col s4">
         <span>tanggal lahir</span>
        <input type="date" name="tgl">
       
      </div>

      <div class="input-field col s4">
      <select class="" name="jk">
        <option value="laki-laki">LAKI-LAKI</option>
        <option value="perempuan">PEREMPUAN</option>
        
      </select>
      <label for="">Jenis Kelamin </label>
      </div>

      <div class="input-field col s4">
        <input  id="input_text" type="text" name="username" data-length="50">
        <label for="">Username</label>
      </div>

      <div class="input-field col s4">
        <input type="password"  name="password">
        <label for="">Password</label>
      </div>


      <input type="submit" name="kirim" value="KLIK" class="btn">
      </div>
    </form>
<br>
    <footer class="page-footer light-blue lighten-1" style="margin-top : 200px;">
      <div class="container">
        <div class="row">
          <div class="col s6">Ini footer</div>
          <div class="col s6">
            <h5>ini daftar menu</h5>
            <ul>
              <li><a href="#" class="grey-text text-lighten-3">Home</a></li>
              <li><a href="#" class="grey-text text-lighten-3">About</a></li>
              <li><a href="#" class="grey-text text-lighten-3">Contact</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <div class="container">
          &copy; WAHYU USMAN + SIGIT JOKO + DIS TA BUDI 2017
        </div>
      </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='materialize/js/materialize.min.js'></script>
    <script>
    $(document).ready(function(){
        $('.button-collapse').sideNav();
       
        $('select').material_select();
    });
    </script>


  <?php 

        if (isset($_POST['kirim'])){
            include('koneksi.php');
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $jk = $_POST['jk'];
            $tgl = $_POST['tgl'];
            $username = $_POST['username'];
            $password = $_POST['password'];

          
$input =  mysqli_query($conn,"INSERT INTO tb_cust (nama,alamat,jk,tgl,username,password)VALUES ('$nama','$alamat','$jk','$tgl','$username','$password')");
            if ($input){
                
                    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=pesan.php">';
            }else {
                echo 'gagal';
            }
        }

 ?>

  </body>
</html>
