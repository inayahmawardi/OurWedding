<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Our Wedding</title>

<!-- CSS FILES -->
        <link rel="icon" href="images/ring.png" type="image/gif" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/bootstrap-icons.css" rel="stylesheet" />

        <link rel="stylesheet" href="css/slick.css" />

        <link href="css/tooplate-little-fashion.css" rel="stylesheet" />

</head>

    </head>

    
    <body>

    
    <?php
    session_start();
    if ($_SESSION['status'] != "login") {
        header("location: admin.php");
    }
    ?>


        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

        <nav class="navbar navbar-expand-lg">
        <div class="container">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <a class="navbar-brand" href="index.php">
            <strong><span>Our</span>Wedding</strong>
          </a>

          <div class="d-lg-none">
            <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

            <a href="product-detail.html" class="bi-bag custom-icon"></a>
          </div>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="admin.php">Dasboard</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pelanggan.php">Pelanggan</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="transaksi.php">Transaksi</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pelunasan.php">Pelunasan</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pemesanan.php">Pemesanan</a>
              </li>
            </ul>

            <div class="d-none d-lg-block">
              <a href="sign-in.html" class="bi-person custom-icon me-3"></a>

              <a href="pemesanan.php" class="bi-bag custom-icon"></a>
            </div>
          </div>
        </div>
      </nav>
