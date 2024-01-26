<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<body>

    <header class="site-header section-padding d-flex justify-content-center align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-14">
                    <h1>
                        <span class="d-block text-primary">Konfirmasi Pelunasan</span>
                        <span class="d-block text-dark">Our Wedding</span>
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
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

                            // Ambil parameter dari URL (yang dikirim dari halaman sebelumnya)
                            $namaLengkap = $_GET['nama'];

                            // Ambil data dari database
                            $sql = "SELECT * FROM pelunasan WHERE Atas_Nama = '$namaLengkap'";
                            $result = mysqli_query($koneksi, $sql);

                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($koneksi));
                            }

                            // Tampilkan data
                            $row = mysqli_fetch_assoc($result);
                            ?>

                            <p>Terima kasih <?php echo $row['Atas_Nama']; ?>, atas pelunasan Anda!</p>
                            <p>Detail Pelunasan:</p>
                            <ul>
                                <li>Nama Lengkap: <?php echo $row['Atas_Nama']; ?></li>
                                <li>Tanggal Pelunasan: <?php echo $row['Tanggal_Pelunasan']; ?></li>
                                <li>Jumlah Pelunasan: <?php echo $row['Jumlah_Pelunasan']; ?></li>
                                <li>Status Pelunasan: <?php echo $row['Catatan_Pelunasan']; ?></li>
                            </ul>

                            <!-- Additional content or links go here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<br>
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
