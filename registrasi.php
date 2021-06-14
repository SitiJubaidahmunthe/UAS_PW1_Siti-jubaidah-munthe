<?php
require 'functions.php';

if( isset($_POST["register"]) ) {
    
    if( registrasi($_POST) > 0 ) {
        echo "<script>
          alert('user baru berhasil di tambahkan!');
        </script>";
    } else {
        echo mysqli_error($conn);
    }
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/fixed.css">
  <link rel="stylesheet" href="css/style_registrasi.css">
    

  <title>Registrasi</title>
    
</head>
<body>
    <!-- Awal Home -->
    <div id="home">
    
      <!-- Awal Navigasi -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><img src="img/logo3.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto"> 
              <!-- meaning margin-left auto -->
            <li class="nav-item">
            <a class="nav-link" href="index.php#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#about">About</a>
          </li>       
          <li class="nav-item">
            <a class="nav-link"  href="index.php#books">Books</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profil_perusahaan.php">Profile</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link"  href="registrasi.php">Registrasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"  href=login.php>Login</a>
          </li>
          </ul> 
        </div>
      </nav>
      <!-- Akhir Navigasi -->
    </div>
    <!-- Akhir Home -->

    <!-- Awal Table Registrasi -->
    <div class="container">
        <form class="login-username" action="" method="post">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Registrasi</p>
            <div class="input-group">
                <input type="text" for="username" placeholder="Username" name="username" id="username" required>
            </div>
            <div class="input-group">
                <input type="password" for="password" placeholder="Password" name="password" id="password" required>
            </div>
            <div class="input-group">
                <input type="password" for="password2" placeholder="Konfirmasi Password" name="password2" id="password2" required>
            </div>
            <div class="input-group">
                <button class="btn" type="submit" name="register">Registrasi</button>
            </div>
            <div class="text-center forget">
                    <p> Sudah punya account? <a href="./login.php">Login</a></p>
                </div>
        </form>
    </div>
    
    <!-- Akhir Table Registasi -->

    <!-- awal footer section-->
    <div id="contact" class="offset">
      <footer>
        <div class="row justify-content-center">
          <div class="col-md-5 text-center">
            <img class="logo" src="img/logo3.png">
            <p>"Pembaca nyaman, Kami pun senang."</p>
            <strong>Contact Info</strong>
            <p>(888) 888-8888 <br> email@libray.com</p>

            <a class="ikon" href="https://web.facebook.com/profile.php?id=100007666605125" target="_blank"><img src="img/facebook.svg" style="width: 30px"></a>
            <a class="ikon" href="https://twitter.com/ramyeoonnn" target="_blank"><img src="img/twitter.svg" style="width: 30px"></a>
            <a class="ikon" href="https://www.instagram.com/puanarash/" target="_blank"><img src="img/instagram.svg" style="width: 30px"></a>
          </div>

          <hr class="socket">
          &copy; Library Books.
        </div> <!-- end of row -->
      </footer>
    </div> <!-- Akhir footer section-->

    <!-- Script Source Files -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>

</body>
</html>