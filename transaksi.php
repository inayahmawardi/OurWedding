

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelunasan</title>
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
        <!-- ... (kode navbar) ... -->
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
                    
                    </li>
                     <li class="nav-item">
                <a class="nav-link" href="pelunasan.php">Pelunasan</a>
              </li>
              
               <li class="nav-item">
                        <a class="nav-link" href="transaksi.php">Transaksi</a>
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
                        <span class="d-block text-primary">Tabel Pelunasan</span>
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

                            // Periksa apakah koneksi berhasil
                            if (!$koneksi) {
                                die("Koneksi Gagal: " . mysqli_connect_error());
                            }

                            $query = "SELECT * FROM pelunasan";
                            $result = mysqli_query($koneksi, $query);

                            // Periksa apakah query berhasil
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
                                        <th>Bukti Pelunasan</th>
                                        <th>Catatan Pelunasan</th>
                                        <th>Aksi</th>
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
                            <td>";

                            // Periksa keberadaan kunci 'bukti_pelunasan' sebelum mengaksesnya
                            if (isset($row['bukti_pelunasan'])) {
                                echo "<img src=\'images/pelunasan/payment.png/{$row['bukti_pelunasan']}\' alt=\'Bukti Pelunasan\'>";
                            } else {
                                echo "Tidak ada bukti pelunasan";
                            }

                            echo "</td>
                                    <td>{$row['Catatan_Pelunasan']}</td>";
                            echo "<td><a href='transaksi_invoice.php?id={$row['ID_Pelunasan']}' class='btn btn-sm btn-success'>Invoice</a></td></tr>";}



                            echo "</tbody></table>";

                            // Tutup koneksi setelah selesai menggunakan
                            mysqli_close($koneksi);
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<br><br>
    <footer class="site-footer">
        <!-- Isi footer seperti yang Anda miliki di file formulir -->
    </footer>

    <!-- Isi modal seperti yang Anda miliki di file formulir -->

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jQuery.headroom.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
