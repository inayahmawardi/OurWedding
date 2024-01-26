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
$namaLengkap = mysqli_real_escape_string($koneksi, $_POST["namaLengkap"]);
$namaPasangan = mysqli_real_escape_string($koneksi, $_POST["namaPasangan"]);
$alamatRumah = mysqli_real_escape_string($koneksi, $_POST["alamat"]);
$pilihanGedung = mysqli_real_escape_string($koneksi, $_POST["pilihanGedung"]);
$nomorTelepon = mysqli_real_escape_string($koneksi, $_POST["noTelepon"]);
$alamatEmail = mysqli_real_escape_string($koneksi, $_POST["email"]);

// Hitung harga gedung
switch ($pilihanGedung) {
    case "Masjid_Al_Barokah_Kranggan":
        $hargaGedung = 5000000;
        break;
    case "Gedung_PUPR_Bekasi":
        $hargaGedung = 7000000;
        break;
    case "Gedung_Graha_Puri_Wedding":
        $hargaGedung = 9000000;
        break;
    case "Islamic_Center_Bekasi":
        $hargaGedung = 8000000;
        break;
    case "Gedung_Sartika_Bekasi":
        $hargaGedung = 7500000;
        break;
    case "Gedung_Dariza_Sport_Club":
        $hargaGedung = 8500000;
        break;
    default:
        $hargaGedung = 0;
}

// Hitung DP (25% dari harga)
$dp = 0.25 * $hargaGedung;

// Simpan data ke database
$sql = "INSERT INTO pemesanan (Nama_Lengkap, Nama_Pasangan, Alamat_Rumah, Pilihan_Gedung, Nomor_Telepon, Alamat_Email, Tanggal_Pemesanan, Harga, DP)
        VALUES ('$namaLengkap', '$namaPasangan', '$alamatRumah', '$pilihanGedung', '$nomorTelepon', '$alamatEmail', NOW(), '$hargaGedung', '$dp')";

if (mysqli_query($koneksi, $sql)) {
    // Arahkan pengguna ke halaman konfirmasi
    header("Location: konfirmasi.php?nama=$namaLengkap&harga=$hargaGedung&dp=$dp");
    exit(); // Pastikan untuk keluar setelah mengarahkan
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

// Tutup koneksi
mysqli_close($koneksi);
?>
