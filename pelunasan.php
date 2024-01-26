<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Wedding</title>
    <!-- CSS FILES -->
    <link rel="icon" href="images/ring.png" type="image/gif" />
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/slick.css" />
    <link href="css/tooplate-little-fashion.css" rel="stylesheet" />
</head>
<body>

    <section class="preloader">
        <div class="spinner">
            <span class="sk-inner-circle"></span>
        </div>
    </section>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                        <a class="nav-link" href="pelunasan.php">Pelunasan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="laporan.php">Laporan</a>
                    </li>
                </ul>
                <div class="d-none d-lg-block">
                    <a href="sign-in.html" class="bi-person custom-icon me-3"></a>
                    <a href="pemesanan.php" class="bi-bag custom-icon"></a>
                </div>
            </div>
        </div>
    </nav>

    <header class="site-header section-padding d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-14">
                    <h1>
                        <span class="d-block text-primary">Data Pelunasan Pelanggan</span>
                        <span class="d-block text-dark">Our Wedding</span>
                    </h1>
                </div>
            </div>
        </div>
    </header>

<!-- ... (potongan kode lainnya) ... -->

            <!-- Formulir Pelunasan -->
            <div class="col-lg-6 col-12 mt-5 ms-auto">
                <h2 class="mb-4">Formulir <span>Pelunasan</span></h2>

                <form action="pelunasan_aksi.php" method="post" class="contact-form me-lg-5 pe-lg-3" id="pelunasanForm">
                    <div class="mb-3">
                        <label for="tanggalPelunasan" class="form-label">Tanggal Pelunasan:</label>
                        <input type="date" name="tanggalPelunasan" class="form-control" id="tanggalPelunasan" required>
                    </div>
                    <div class="mb-3">
                        <label for="jumlahPelunasan" class="form-label">Jumlah Pelunasan:</label>
                        <input type="text" name="jumlahPelunasan" class="form-control" id="jumlahPelunasan" placeholder="Masukkan jumlah pelunasan" required>
                    </div>
                    <div class="mb-3">
                        <label for="atasNama" class="form-label">Atas Nama:</label>
                        <input type="text" name="atasNama" class="form-control" id="atasNama" placeholder="Masukkan atas nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="nomorRekening" class="form-label">Nomor Rekening:</label>
                        <input type="text" name="nomorRekening" class="form-control" id="nomorRekening" placeholder="Masukkan nomor rekening" required>
                    </div>
                    <div class="mb-3">
                        <label for="fbukti_pelunasan" class="form-label">Upload Foto Rekening:</label>
                        <input type="file" name="bukti_pelunasan" class="form-control" id="bukti_pelunasan" accept="image/*" required>
                    </div>
                    <div class="mb-3">
                        <label for="catatanPelunasan" class="form-label">Catatan Pelunasan:</label>
                        <textarea name="catatanPelunasan" class="form-control" id="catatanPelunasan" placeholder="Tambahkan catatan pelunasan"></textarea>
                    </div>

                    <button type="submit" class="btn custom-btn cart-btn ms-lg-4">Submit Pelunasan</button>
                </form>
            </div>
        </div>
    </div>
</main>
<br>
<footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-10 me-auto mb-4">
            <h4 class="text-white mb-3">
              <a href="admin.php">Our</a>Wedding
            </h4>
            <p class="copyright-text text-muted mt-lg-5 mb-4 mb-lg-0">
              UAS Pemrograman Web Dasar <strong>Kelompok 3</strong>
            </p>
            <br />
          </div>
          <div class="col-lg-5 col-8">
                        <h5 class="text-white mb-3">Anggot Kelompopk :</h5>

                        <ul class="footer-menu d-flex flex-wrap">
                            <li class="footer-menu-item"><a href="about.php" class="footer-menu-link">Anggita Fauziah</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Inayah Ainina Mawardi</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Maya Barek Helen</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Salwa Aliefia</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Sekar Widowati</a></li>
                        </ul>
                    </div>
          <div class="col-lg-3 col-4">
            <h5 class="text-white mb-3">Social</h5>

            <ul class="social-icon">
              <li>
                <a href ="https://youtu.be/Kc3_Uut_-iU?si=oBfyYTB3UIb7VffA" class="social-icon-link bi-youtube"></a>
              </li>

              <li>
                <a href=" https://wa.me/089601053938" class="social-icon-link bi-whatsapp"></a>
              </li>

              <li>
                <a href="" class="social-icon-link bi-instagram"></a>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>


