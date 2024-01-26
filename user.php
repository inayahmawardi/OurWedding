<?php 
    session_start();
      if(!isset($_SESSION['login_user'])) {
        header("location: login.php");
      }else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

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
<!--  Navbar -->
    <main>
     <nav class="navbar navbar-expand-lg">
        <div class="container">
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
            <a href="sign-in.php" class="bi-person custom-icon me-3"></a>

            <a href="product-detail.php" class="bi-bag custom-icon"></a>
          </div>

          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" href="admin.php">Home</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="story.php">Story</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="product.php">Pilihan Paket</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="faq.php">FAQs</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pemesanan.php">Pemesanan</a>
              </li>
            </ul>

            <div class="d-none d-lg-block">
              <a href="logout.php" class="bi-person custom-icon me-3">Log Out</a>

              <a href="product-detaile.php.html" class="bi-bag custom-icon"></a>
            </div>
          </div>
        </div>
      </nav>

      <section class="slick-slideshow">
        <div class="slick-custom">
          <img
            src="images/slideshow/bg4.jpg"
            class="img-fluid"
            alt=""
          />

          <div class="slick-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-10">
                  <h1 class="slick-title">Our Event</h1>

                  <p class="lead text-white mt-lg-3 mb-lg-5">
                  "Bersama kami, buat setiap momen Anda berkilau dengan elegansi yang tiada tara."
                  </p>

                  <a href="produk.php" class="btn custom-btn">Pilih Paket</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slick-custom">
          <img
            src="images/slideshow/bg2.jpg"
            class="img-fluid"
            alt=""
          />

          <div class="slick-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-10">
                  <h1 class="slick-title">Our Event</h1>

                  <p class="lead text-white mt-lg-3 mb-lg-5">
                  "Temukan sentuhan keanggunan dalam setiap detail acara, 
                  karena pesta Anda layak mendapatkan keindahan yang tak terlupakan."
                  </p>

                  <a href="kontak.php" class="btn custom-btn"
                    >Tentang Kami</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="slick-custom">
          <img
            src="images/slideshow/bg3.jpg"
            class="img-fluid"
            alt=""
          />

          <div class="slick-bottom">
            <div class="container">
              <div class="row">
                <div class="col-lg-6 col-10">
                  <h1 class="slick-title">Talk to us</h1>

                  <p class="lead text-white mt-lg-3 mb-lg-5">
                  "Ciptakan Momen Ajaib Bersama Kami"
                  </p>

                  <a href="contact.php" class="btn custom-btn">Hubungi Kami</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="about section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="mb-5">Get started with <span>Our</span>Wedding</h2>
            </div>

            <div class="col-lg-2 col-12 mt-auto mb-auto">
              <ul
                class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center"
                id="pills-tab"
                role="tablist"
              >
                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link active"
                    id="pills-home-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-home"
                    type="button"
                    role="tab"
                    aria-controls="pills-home"
                    aria-selected="true"
                  >
                    Venue
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-youtube-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-youtube"
                    type="button"
                    role="tab"
                    aria-controls="pills-youtube"
                    aria-selected="true"
                  >
                    MUA
                  </button>
                </li>

                <li class="nav-item" role="presentation">
                  <button
                    class="nav-link"
                    id="pills-skill-tab"
                    data-bs-toggle="pill"
                    data-bs-target="#pills-skill"
                    type="button"
                    role="tab"
                    aria-controls="pills-skill"
                    aria-selected="false"
                  >
                  WO
                  </button>
                </li>
              </ul>
            </div>

            <div class="col-lg-10 col-12">
              <div class="tab-content mt-2" id="pills-tabContent">
                <div
                  class="tab-pane fade show active"
                  id="pills-home"
                  role="tabpanel"
                  aria-labelledby="pills-home-tab"
                >
                  <div class="row">
                    <div class="col-lg-7 col-12">
                      <img
                        src="images/makanan.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>

                    <div class="col-lg-5 col-12">
                      <div
                        class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5"
                      >
                        <h4 class="mb-3">
                          Good <span>Design</span> <br />Ideas for
                          <span>your</span> fashion
                        </h4>
                        <p>
                          Percayakan Kebahagian Pesta Anda Bersama Kami
                        </p>

                        <p>
                          Nikmati Kemewahan Pesata Yang Tak terlupakan
                        </p>

                        <div class="mt-2 mt-lg-auto">
                          <a href="about.html" class="custom-link mb-2">
                            Learn more about us
                            <i class="bi-arrow-right ms-2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="tab-pane fade"
                  id="pills-youtube"
                  role="tabpanel"
                  aria-labelledby="pills-youtube-tab"
                >
                <div class="row">
                    <div class="col-lg-7 col-12">
                      <img
                        src="images/mua.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>

                    <div class="col-lg-5 col-12">
                      <div
                        class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5"
                      >
                        <h4 class="mb-3">Life at Studio</h4>

                        <p>
                        Wujudkan Kecantikan Sejati di Hari Bahagia Anda.
                        </p>

                        <p>Keindahan yang Lebih dari Sekadar Tampilan.</p>

                        <div class="mt-2 mt-lg-auto">
                          <a href="contact.html" class="custom-link mb-2">
                            Work with us
                            <i class="bi-arrow-right ms-2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="tab-pane fade"
                  id="pills-skill"
                  role="tabpanel"
                  aria-labelledby="pills-skill-tab"
                >
                  <div class="row">
                    <div class="col-lg-7 col-12">
                      <img
                        src="images/wo.jpg"
                        class="img-fluid"
                        alt=""
                      />
                    </div>

                    <div class="col-lg-5 col-12">
                      <div
                        class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5"
                      >
                        <h4 class="mb-3">"Setiap Detail, Setiap Momen, Dirancang untuk Kesempurnaan."</h4>

                        <p>
                        "Mewujudkan Pernikahan Impian Anda, Sesuai Dengan Gaya Anda.Rileks dan Nikmati, Kami Akan Mengurusnya Untuk Anda."
                        </p>

                        <div class="skill-thumb mt-3">
                    <strong>Perencanaan Acara</strong>
                    <span class="float-end">95%</span>
                    <div class="progress">
                        <div
                        class="progress-bar progress-bar-primary"
                        role="progressbar"
                        aria-valuenow="95"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 95%"
                        ></div>
                    </div>

                    <strong>Manajemen Logistik</strong>
                    <span class="float-end">85%</span>
                    <div class="progress">
                        <div
                        class="progress-bar progress-bar-primary"
                        role="progressbar"
                        aria-valuenow="85"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 85%"
                        ></div>
                    </div>

                    <strong>Koordinasi Vendor</strong>
                    <span class="float-end">80%</span>
                    <div class="progress">
                        <div
                        class="progress-bar progress-bar-primary"
                        role="progressbar"
                        aria-valuenow="80"
                        aria-valuemin="0"
                        aria-valuemax="100"
                        style="width: 80%"
                        ></div>
                    </div>
                    </div>
                        <div class="mt-2 mt-lg-auto">
                          <a href="products.html" class="custom-link mb-2">
                            Explore products
                            <i class="bi-arrow-right ms-2"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="front-product">
        <div class="container-fluid p-0">
          <div class="row align-items-center">
            <div class="col-lg-6 col-12">
              <img
                src="images/retail-shop-owner-mask-social-distancing-shopping.jpg"
                class="img-fluid"
                alt=""
              />
            </div>

            <div class="col-lg-6 col-12">
              <div class="px-5 py-5 py-lg-0">
                <h2 class="mb-4"><span>Our </span> Wedding</h2>

                <a href="products.php" class="custom-link">
                  Explore Products
                  <i class="bi-arrow-right ms-2"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="featured-product section-padding">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <h2 class="mb-5">Pengalaman Pengguna</h2>
            </div>

            <div class="col-lg-4 col-12 mb-3">
              <div class="product-thumb">
                <a href="product.php">
                  <img
                    src="images/product/pro12.webp"
                    class="img-fluid product-image"
                    alt=""
                  />
                </a>

                <div class="product-top d-flex">
                  <span class="product-alert me-auto">Gedung PUPR Bekasi</span>

                  <a href="#" class="bi-heart-fill product-icon"></a>
                </div>

                <div class="product-info d-flex">
                  <div>
                    <br><br>
                    <h5 class="product-title mb-0">
                      <a href="product.php" class="product-title-link"
                        >Gedung Dariza Sport Club </a
                      >
                    </h5>
<br><br>
                    <p class="product-p">"Paket pernikahan dari Our Wedding itu kayak dapet hadiah ulang tahun yang nggak pernah kita duga! Semuanya jadi lebih mudah dan menyenangkan. 
                      Timnya friendly, ngertiin banget apa yang kita mau. Terima kasih, Our Wedding!"</p>
                  </div>

    
                  
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-12 mb-3">
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

                <div class="product-info d-flex">
                  <div>
                    <h5 class="product-title mb-0">
                      <a href="product.php" class="product-title-link"> Gedung Dariza Sport Club</a>
                    </h5>

                    <p class="product-p">"Paket pernikahan dari Our Wedding 
                      adalah pilihan yang tepat! Mereka tidak hanya menyediakan layanan yang luar biasa tetapi juga memberikan solusi
                       kreatif untuk membuat pernikahan kami unik. Semua tamu kami terkesan, dan kami sangat puas dengan hasilnya."</p>
                  </div>
                  
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-12">
              <div class="product-thumb">
                <a href="product-detail.html">
                  <img
                    src="images/product/pro11.webp"
                    class="img-fluid product-image"
                    alt=""
                  />
                </a>

                <div class="product-top d-flex">
                  <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                </div>

                <div class="product-info d-flex">
                  <div>
                    <h5 class="product-title mb-0">
                      <a href="product-detail.html" class="product-title-link"
                        >Gedung Sartika Bekasi</a
                      >
                    </h5>

                    <p class="product-p">"Paket pernikahan dari Our Wedding itu kayak dapet jackpot! Semuanya enak banget, dari makanan sampe dekorasi. 
                      Timnya juga ramah-ramah, berasa kayak lagi bareng temen sendiri. Pokoknya puas banget deh!"</p>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-12 text-center">
              <a href="product.php" class="view-all">View All Products</a>
            </div>
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
<?php }?>
