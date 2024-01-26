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

          <a class="navbar-brand" href="admin.php">
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
                        <span class="d-block text-primary">Tabel Pelanggan</span>
                        <span class="d-block text-dark">Our Wedding</span>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">

                            <?php
                            $host = "localhost";
                            $user = "root";
                            $pass = "";
                            $db = "db_pemesanan";

                            $koneksi = mysqli_connect($host, $user, $pass, $db);

                            if (!$koneksi) {
                                die("Koneksi Gagal: " . mysqli_connect_error());
                            }

                            $query = "SELECT `ID_Pemesan`, `Nama_Lengkap`, `Nama_Pasangan`, `Alamat_Rumah`, `Pilihan_Gedung`, `Nomor_Telepon`, `Alamat_Email`, `Tanggal_Pemesanan`, `Harga`, `DP` FROM `pemesanan`";
                            $result = mysqli_query($koneksi, $query);

                            if (!$result) {
                                die("Error: " . $query . "<br>" . mysqli_error($koneksi));
                            }

                            echo "<table class='table table-striped table-bordered'>
                                <thead class='thead-dark'>
                                    <tr>
                                        <th><center>ID Pemesan</th>
                                        <th>Nama Lengkap</th>
                                        <th>Nama Pasangan</th>
                                        <th>Alamat Rumah</th>
                                        <th><center>Pilihan Gedung</th>
                                        <th>Nomor Telepon</th>
                                        <th>Alamat Email</th>
                                        <th>Tanggal Pemesanan</th>
                                        <th>Harga</th>
                                        <th>DP</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>";

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>
                                    <td>{$row['ID_Pemesan']}</td>
                                    <td>{$row['Nama_Lengkap']}</td>
                                    <td>{$row['Nama_Pasangan']}</td>
                                    <td>{$row['Alamat_Rumah']}</td>
                                    <td>{$row['Pilihan_Gedung']}</td>
                                    <td>{$row['Nomor_Telepon']}</td>
                                    <td>{$row['Alamat_Email']}</td>
                                    <td>{$row['Tanggal_Pemesanan']}</td>
                                    <td>{$row['Harga']}</td>
                                    <td>{$row['DP']}</td>
                                    <td>
                                        <a href='pelanggan_edit.php?id={$row['ID_Pemesan']}' class='btn btn-sm btn-warning'>Edit</a>
                                        <a href='pelanggan_hapus.php?id={$row['ID_Pemesan']}' class='btn btn-sm btn-danger' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini?\")'>Hapus</a>
                                       
                                    </td>
                                </tr>";
                            }

                            echo "</tbody></table>";

                            mysqli_close($koneksi);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include 'footer1.php'; ?>
