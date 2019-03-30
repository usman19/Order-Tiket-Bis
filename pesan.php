<html>
  <head>

    <title>Pesan</title>
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
            <li><a href="pesan.php">Pesan</a></li>
            <li><a href="logout_u.php">Logout</a></li>

          </ul>

          <ul class="side-nav" id="mobile-menu">
            <li><a href="index.php">Awal</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="pesan.php">Pesan</a></li>
          </ul>

        </div>
      </nav>
    </div>
    <br>
    <form method="post" action="prosesinput.php" enctype="multipart/form-data">
    <div class="row">
      <div class="input-field col s4">
        <input type="text" name="nama" value="">
        <label for="">Nama</label>
      </div>

      

      <div class="row">
      <div class="input-field col s4">
        <input type="text" name="notlp" value="">
        <label for="">Telpon</label>
      </div>

      <div class="input-field col s4">
        <input type="date" name="tgl" class="datepicker" placeholder="Tanggal">
        <label for=""></label>
      </div>

      <div class="input-field col s4">
      <select class="" name="tujuan">
        <option value="Yogyakarta">Yogyakarta</option>
        <option value="Bandung">Bandung</option>
        <option value="Malang">Malang</option>
      </select>
      <label for="">Pilih</label>
      </div>

      <div class="input-field col s4">
        <input type="text" name="harga" id="harga" size="7" value="3500000" onkeyup="kali();">
        <label for="">Harga</label>
      </div>

      <div class="input-field col s4">
        <input type="text"  name="lama" id="lama" size="7"  onkeyup="kali();" >
        <label for="">Lama Hari</label>
      </div>

      <div class="input-field col s4">
        <input type="text" name="total" id="total" size="7" value="" >
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
             <li><a href="#" class="grey-text text-lighten-3">Awal</a></li>
            <li><a href="#" class="grey-text text-lighten-3">Tentang</a></li>
            <li><a href="#" class="grey-text text-lighten-3">Kontak</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="footer-copyright">
        <div class="container">
          &copy; WAHYU USMAN + SIGIT JOKO + DISTA BUDI 2017
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



  <script>
    function kali(){
      var valueLama = document.getElementById('lama').value;
      var valueHarga = document.getElementById('harga').value;
      var total = parseInt(valueLama) * parseInt(valueHarga);
      if (!isNaN(total)){
      document.getElementById('total').value = total;
      }
    }
  </script>

  </body>
</html>
