<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "db_pemesanan";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}

// Tangkap data dari formulir
$tanggalPelunasan = mysqli_real_escape_string($koneksi, $_POST["tanggalPelunasan"]);
$jumlahPelunasan = mysqli_real_escape_string($koneksi, $_POST["jumlahPelunasan"]);
$atasNama = mysqli_real_escape_string($koneksi, $_POST["atasNama"]);
$nomorRekening = mysqli_real_escape_string($koneksi, $_POST["nomorRekening"]);
$buktipelunasan = mysqli_real_escape_string($koneksi, $_POST["buktipelunasan"]);
$catatanPelunasan = mysqli_real_escape_string($koneksi, $_POST["catatanPelunasan"]);

// Simpan data ke database
$sql = "INSERT INTO pelunasan (Tanggal_Pelunasan, Jumlah_Pelunasan, Atas_Nama, Nomor_Rekening,bukti_pelunasan, Catatan_Pelunasan)
        VALUES ('$tanggalPelunasan', '$jumlahPelunasan', '$atasNama', '$nomorRekening','$buktipelunasan', '$catatanPelunasan')";

if (mysqli_query($koneksi, $sql)) {
    // Arahkan pengguna ke halaman konfirmasi
    header("Location: konfirmasi_pelunasan.php?nama=$namaLengkap");
    exit(); // Pastikan untuk keluar setelah mengarahkan
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
