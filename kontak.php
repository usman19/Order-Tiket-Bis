<!DOCTYPE html>
<html>
<head>
  <title>tentang</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="materialize/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="navbar-fixed">
      <nav class="light-blue lighten-1">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo right">AdsiTransport</a>
          <a href="#" data-activates="mobile-menu" class="button-collapse">
            <i class="material-icons">menu</i>
          </a>
          <ul class=" hide-on-med-and-down">
            <li><a href="index.php">Awal</a></li>
            <li><a href="tentang.php">Tentang</a></li>
            <li><a href="kontak.php">Kontak</a></li>
            <li><a href="login_u.php">Pesan <span class="new badge pink accent-1">1</span></a></li>
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

<div class="container">
    <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header"><i class="material-icons">email</i>EMAIL</div>
      <div class="collapsible-body"><span>SigitJoko@gmail.com</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">place</i>ALAMAT</div>
      <div class="collapsible-body"><span>Jalan Swadaya KP.Poncol No 42</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="material-icons">call</i>TELEPON</div>
      <div class="collapsible-body"><span>08774320726</span></div>
    </li>
    <li>
      <div class="collapsible-header"><i class="fa fa-instagram" aria-hidden="true"></i>Instagram</div>
      <div class="collapsible-body"><span>@bispariwisatajkt</span></div>
    </li>
  </ul>
        

 
</div>



 <footer class="page-footer light-blue lighten-1">
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
        &copy; SIGIT JOKO AZIZ PUTRA 2017
      </div>
    </div>
  </footer>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src='materialize/js/materialize.min.js'></script>
    <script>
      $(document).ready(function(){
       
        $('.button-collapse').sideNav();
        
          $('.collapsible').collapsible();
      });
  </script>
</body>
</html>