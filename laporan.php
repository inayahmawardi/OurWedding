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
                <a class="nav-link active" href="user.php">Dasboard</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="pelanggan.php">Pelanggan</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="Pelunasan.php">Pelunasan</a>
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
                        <span class="d-block text-primary">Tabel Laporan Pelunasan Pelanggan</span>
                        <span class="d-block text-dark">Our Wedding</span>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
        <div class="panel">
            <div class="panel-heading">
                <h4>Filter Laporan</h4>
            </div>
            <div class="panel-body">
                <form action="laporan.php" method="get">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Dari Tanggal</th>
                            <th>Sampai Tanggal</th>
                            <th width="1%"></th>
                        </tr>
                        <tr>
                            <td>
                                <br/>
                                <input type="date" name="tgl_dari" class="form-control">
                            </td>
                            <td>
                                <br/>
                                <input type="date" name="tgl_sampai" class="form-control">
                                <br/>
                            </td>
                            <td>
                                <br/>
                                <input type="submit" class="btn btn-primary" value="Filter">
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>

        <br/>

        <?php
        // Koneksi ke database (pastikan Anda sudah memiliki koneksi yang benar)
        $koneksi = mysqli_connect("localhost", "root", "", "db_pemesanan");

        // Periksa koneksi
        if (mysqli_connect_error()) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }

        if (isset($_GET['tgl_dari']) && isset($_GET['tgl_sampai'])) {
            $dari = $_GET['tgl_dari'];
            $sampai = $_GET['tgl_sampai'];

            // Lanjutkan dengan query menggunakan rentang tanggal dari formulir
            $query = "SELECT * FROM pelunasan WHERE Tanggal_Pelunasan BETWEEN '$dari' AND '$sampai'";
            $result = mysqli_query($koneksi, $query);

            if (!$result) {
                die("Error: " . $query . "<br>" . mysqli_error($koneksi));
            }

            echo "<table class='table table-striped table-bordered'>
                <thead class='thead-dark'>
                    <tr>
                        <th>ID Pelunasan</th>
                        <th>Tanggal Pelunasan</th>
                        <th>Jumlah Pelunasan</th>
                        <th>Atas Nama</th>
                        <th>Nomor Rekening</th>
                        <th>Catatan Pelunasan</th>
                    </tr>
                </thead>
                <tbody>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                    <td>{$row['ID_Pelunasan']}</td>
                    <td>{$row['Tanggal_Pelunasan']}</td>
                    <td>{$row['Jumlah_Pelunasan']}</td>
                    <td>{$row['Atas_Nama']}</td>
                    <td>{$row['Nomor_Rekening']}</td>
                    <td>{$row['Catatan_Pelunasan']}</td>
                  </tr>";
            }

            echo "</tbody></table>";
        }

        mysqli_close($koneksi);
        ?>
    </div>

    <footer class="site-footer">
        <!-- ... (kode footer sebelumnya) ... -->
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
