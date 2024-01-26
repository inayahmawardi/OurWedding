<?php 
  require_once('function.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Our Wedding| Login</title>
  <link rel="stylesheet" href="<?=url('_assets/css/index.css')?>">
  <link rel="shortcut icon" href="<?= url('_assets/img/logo/favicon-svg.svg') ?>" type="image/x-icon">
</head>
<body>

  <?php if (isset($_SESSION['login']) && isset($_SESSION['user'])) : ?>
    <script>window.location='http://localhost/pwdkelompok3/'</script>
  <?php endif ?> 

  <?php 
        if(isset($_POST['login'])) {
          $user = $_POST['username'];
          $password = $_POST['password'];

          // Query untuk memilih tabel
          $cek_data = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$user' AND password = '$password'");
          $hasil = mysqli_fetch_array($cek_data);
          $status = $hasil['status'];
          $login_user = $hasil['username'];
          $row = mysqli_num_rows($cek_data);

          // Pengecekan Kondisi Login Berhasil/Tidak
            if ($row > 0) {
                session_start();   
                $_SESSION['login_user'] = $login_user;

                if ($status == 'admin') {
                  header('location: admin.php');
                }elseif ($status == 'user') {
                  header('location: user.php'); 
                }
            }else{
                header("location:  .php");
            }
        }
       ?>
    </div>
  <div class="box">
    <div class="box-content">
      <div class="col box__left">
        <div class="logo">
          <img src="<?= url('_assets/img/logo2.png') ?>" alt="">
        </div>
        <div class="box__left-title">
          <h4>Login untuk akun kamu</h4>
        </div>

        <div class="box__left-form">
          <form action="" method="post">
            <div class="box__left-form-group">
              <div class="input-form">
                <input type="text" name="username" placeholder="Username" required autocomplete="off">
              </div>
            </div>

            <div class="box__left-form-group">
              <div class="input-form">
                <input type="password" name="password" placeholder="Password" required autocomplete="off">
              </div>
            </div>

            <div class="box__left-form-group">
              <button type="submit" name="login" class="btn-login mt-1">Login</button>
            </div>
          </form>
        </div>
      </div>

      <div class="col box__right">
        <div class="box__right-content">
          <div class="text__right">
            <h1>Login</h1>
            <h1>Our Wedding</h1>
          </div>

          <img src=" <?=url('_assets/img/pasangan.png')?>" alt="" class="box-img-orang">
          <img src=" <?=url('_assets/img/bunga.png')?>" alt="" class="box-img-celana">
          <img src=" <?=url('_assets/img/ring2.png')?>" alt="" class="box-img-kaos">
          <img src=" <?=url('_assets/img/dress.png')?>" alt="" class="box-img-kemeja">

          <!-- Bubble Variasi -->
          <div class="bubble-1"></div>
          <div class="bubble-2"></div>
          <div class="bubble-3"></div>
          <div class="bubble-4"></div>
          <div class="bubble-5"></div>
          <div class="bubble-6"></div>

          <!-- Garis Variasi -->
          <div class="garis garis-sm garis-1"></div>
          <div class="garis garis-md garis-2"></div>
          <div class="garis garis-sm garis-3"></div>
          <div class="garis garis-md garis-4"></div>
          <div class="garis garis-md garis-5"></div>
          <div class="garis garis-lg garis-6"></div>
          <div class="garis garis-lg garis-7"></div>
          <div class="garis garis-xl garis-8"></div>
          <div class="garis garis-sm garis-9"></div>
          <div class="garis garis-md garis-10"></div>
          <div class="garis garis-sm garis-11"></div>
          <div class="garis garis-md garis-12"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="copyright">
    <p>&copy; <span id="tahun"></span> All Rights Reserved.</p>
    <script>
    // mengambil tanggal hari ini
    var now = new Date();
    var tahun = now.getFullYear();
    // menampilkan tahun di dalam elemen HTML
    document.getElementById("tahun").innerHTML = tahun;
    </script>
  
  </div>
</body>
</html>