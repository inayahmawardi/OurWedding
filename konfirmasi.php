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
                        <span class="d-block text-primary">Konfirmasi Pemesanan</span>
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
                            $hargaGedung = $_GET['harga'];
                            $dp = $_GET['dp'];

                            // Ambil data dari database
                            $sql = "SELECT * FROM pemesanan WHERE Nama_Lengkap = '$namaLengkap'";
                            $result = mysqli_query($koneksi, $sql);

                            if (!$result) {
                                die("Error: " . $sql . "<br>" . mysqli_error($koneksi));
                            }

                            // Tampilkan data
                            $row = mysqli_fetch_assoc($result);
                            ?>

                            <p>Terima kasih, <?php echo $row['Nama_Lengkap']; ?>, atas pemesanan Anda!</p>
                            <p>Detail pemesanan:</p>
                            <ul>
                                <li>Nama Pasangan: <?php echo $row['Nama_Pasangan']; ?></li>
                                <li>Alamat Rumah: <?php echo $row['Alamat_Rumah']; ?></li>
                                <li>Pilihan Gedung: <?php echo $row['Pilihan_Gedung']; ?></li>
                                <li>Nomor Telepon: <?php echo $row['Nomor_Telepon']; ?></li>
                                <li>Email: <?php echo $row['Alamat_Email']; ?></li>
                                <li>Tanggal Pemesanan: <?php echo $row['Tanggal_Pemesanan']; ?></li>
                                <li>Total Harga: <?php echo $row['Harga']; ?></li>
                                <li>DP yang harus dibayarkan: <?php echo $row['DP']; ?></li>
                            </ul>

                        <p>Untuk melanjutkan pemesanan, mohon segera transfer uang DP sebesar 25%.</p>
                        <p>Silahkan transfer ke nomor rekening 0887382948 atas nama Inayah Ainina Mawardi.</p>
                        <p>kami akan menghubungin anda melalu whatsapp untuk proses lebih lanjut</p>
                        <p>Setelah transfer, konfirmasi pembayaran dapat dikirimkan ke <strong>inayahmawardi3@gmail.com</strong></p>
                        <p>Terima kasih atas kepercayaan Anda. Kami siap menjadikan momen spesial Anda menjadi tak terlupakan!</p>
                    </div>

                            <!-- Additional content or links go here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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
