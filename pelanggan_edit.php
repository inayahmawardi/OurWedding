<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pemesanan";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id_pemesan = $_GET['id'];

    // Fetch data for the specified ID
    $query = "SELECT * FROM pemesanan WHERE ID_Pemesan = '$id_pemesan'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error: " . $query . "<br>" . mysqli_error($koneksi));
    }

    // Display the form for editing
    if ($row = mysqli_fetch_assoc($result)) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Edit Pelanggan</title>

            <title>Our Wedding</title>

<!-- CSS FILES -->
        <link rel="icon" href="images/ring.png" type="image/gif" />
        <link href="css/bootstrap.min.css" rel="stylesheet" />
        <link href="css/bootstrap-icons.css" rel="stylesheet" />

        <link rel="stylesheet" href="css/slick.css" />

        <link href="css/tooplate-little-fashion.css" rel="stylesheet" />
            <!-- Include your CSS and other necessary files -->
        </head>
        <body>
        <section class="contact section-padding">
                <div class="container">
                    <div class="row">
                        
    <div class="col-lg-6 col-12">
        <h2>Edit Pelanggan</h2>

        <form action="pelanggan_update.php" method="post">
    <div class="mb-3">
        <label for="nama_lengkap">Nama Lengkap:</label>
        <input type="text" name="nama_lengkap" value="<?php echo $row['Nama_Lengkap']; ?>">
    </div>
    <!-- Include other input fields here -->
    <div class="mb-3">
        <label for="nama_pasangan">Nama Pasangan:</label>
        <input type="text" name="nama_pasangan" value="<?php echo $row['Nama_Pasangan']; ?>">
    </div>

    <div class="mb-3">
        <label for="alamat_rumah">Alamat Rumah:</label>
        <input type="text" name="alamat_rumah" value="<?php echo $row['Alamat_Rumah']; ?>">
    </div>

    <div class="mb-3">
        <label for="pilihan_gedung">Pilihan Gedung:</label>
        <select name="pilihan_gedung" class="form-select">
            <option value="Masjid_Al_Barokah_Kranggan" <?php echo ($row['Pilihan_Gedung'] == 'Masjid_Al_Barokah_Kranggan') ? 'selected' : ''; ?>>Masjid Al Barokah Kranggan</option>
            <option value="Gedung_PUPR_Bekasi" <?php echo ($row['Pilihan_Gedung'] == 'Gedung_PUPR_Bekasi') ? 'selected' : ''; ?>>Gedung PUPR Bekasi</option>
            <option value="Gedung_Graha_Puri_Wedding" <?php echo ($row['Pilihan_Gedung'] == 'Gedung_Graha_Puri_Wedding') ? 'selected' : ''; ?>>Gedung Graha Puri Wedding</option>
            <option value="Islamic_Center_Bekasi" <?php echo ($row['Pilihan_Gedung'] == 'Islamic_Center_Bekasi') ? 'selected' : ''; ?>>Islamic Center Bekasi</option>
            <option value="Gedung_Sartika_Bekasi" <?php echo ($row['Pilihan_Gedung'] == 'Gedung_Sartika_Bekasi') ? 'selected' : ''; ?>>Gedung Sartika Bekasi</option>
            <option value="Gedung_Dariza_Sport_Club" <?php echo ($row['Pilihan_Gedung'] == 'Gedung_Dariza_Sport_Club') ? 'selected' : ''; ?>>Gedung Dariza Sport Club</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="nomor_telepon">Nomor Telepon:</label>
        <input type="text" name="nomor_telepon" value="<?php echo $row['Nomor_Telepon']; ?>">
    </div>

    <div class="mb-3">
        <label for="alamat_email">Alamat Email:</label>
        <input type="text" name="alamat_email" value="<?php echo $row['Alamat_Email']; ?>">
    </div>

    <div class="mb-3">
        <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
        <input type="text" name="tanggal_pemesanan" value="<?php echo $row['Tanggal_Pemesanan']; ?>">
    </div>

    <div class="mb-3">
        <label for="harga">Harga:</label>
        <input type="text" name="harga" value="<?php echo $row['Harga']; ?>">
    </div>

    <div class="mb-3">
        <label for="dp">DP:</label>
        <input type="text" name="dp" value="<?php echo $row['DP']; ?>">
    </div>

    <div class="mb-3">
        <input type="hidden" name="id_pemesan" value="<?php echo $row['ID_Pemesan']; ?>">
        <input type="submit" value="Update">
    </div>
</form>


        </body>
        </html>
        <?php
    } else {
        echo "Pemesan not found!";
    }
} else {
    echo "ID not provided!";
}

mysqli_close($koneksi);
?>
