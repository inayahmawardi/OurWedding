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
                <a class="nav-link active" href="user.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="story.php">Story</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="product.php">Pilihan Paket</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="faq.html">FAQs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="product_detail.php">Pemesanan</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

            <header class="site-header section-padding-img site-header-image">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-10 col-12 header-info">
                            <h1>
                                <span class="d-block text-primary">Our</span>
                                <span class="d-block text-dark">Wedding</span>
                            </h1>
                        </div>
                    </div>
                </div>

                <img src="images/header/story2.jpg" class="header-image img-fluid" alt="">
            </header>

            <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Formulir <span>Pemesanan</span></h2>

                            <form action="product_aksi.php" method="post"  class = "contact-form me-lg-5 pe-lg-3"id="weddingForm">
                            <div class="mb-3">
                                <label for="namaLengkap" class="form-label">Nama Lengkap :</label>
                                <input type="text" name="namaLengkap" class="form-control" id="namaLengkap" placeholder="Masukkan nama lengkap anda..">
                            </div>
                            <div class="mb-3">
                                <label for="namaPasangan" class="form-label">Nama Pasangan :</label>
                                <input type="text" name="namaPasangan" class="form-control" id="namaPasangan" placeholder="Masukkan nama lengkap pasangan anda..">
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label">Alamat :</label>
                                <input type="text" name="alamat" class="form-control" id="alamat" placeholder="Masukkan alamat anda..">
                            </div>
                            <div class="mb-3">
                                <label for="pilihanGedung" class="form-label">Pilihan Gedung:</label>
                                <select name="pilihanGedung" class="form-select">
                                    <option value="Masjid_Al_Barokah_Kranggan">Masjid Al Barokah Kranggan</option>
                                    <option value="Gedung_PUPR_Bekasi">Gedung PUPR Bekasi</option>
                                    <option value="Gedung_Graha_Puri_Wedding">Gedung Graha Puri Wedding</option>
                                    <option value="Islamic_Center_Bekasi">Islamic Center Bekasi</option>
                                    <option value="Gedung_Sartika_Bekasi">Gedung Sartika Bekasi</option>
                                    <option value="Gedung_Dariza_Sport_Club">Gedung Dariza Sport Club</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="noTelepon" class="form-label">No Telepon :</label>
                                <input type="text" name="noTelepon" class="form-control" id="noTelepon" placeholder="Masukkan no telepon">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email :</label>
                                <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email anda..">
                            </div>

                            <button type="submit" class="btn custom-btn cart-btn ms-lg-4">Submit</button>

                        </form>
                        </div>

                                    <div class="col-lg-6 col-12 mt-5 ms-auto">
                        <div class="product-thumb">
                            <a href="product.php">
                            <img
                                src="images/product/pro4.jpg"
                                class="img-fluid product-image"
                                alt=""
                            />
                            </a>

                            <div class="product-top d-flex">
                            

                            <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                            </div>
                        </div>
                                                
            </section>
        </main>

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
