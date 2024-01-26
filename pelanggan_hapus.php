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

    // Delete the record from the database
    $query = "DELETE FROM pemesanan WHERE ID_Pemesan = '$id_pemesan'";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        // Data berhasil dihapus, arahkan ke pelanggan.php
        header("Location: pelanggan.php");
        exit(); // Pastikan untuk keluar setelah mengarahkan
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
} else {
    echo "ID not provided!";
}

mysqli_close($koneksi);
?>
