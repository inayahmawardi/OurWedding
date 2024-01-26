<?php
session_start();

// Koneksi Ke database
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_pemesanan";

// Koneksi ke Database
$koneksi = mysqli_connect($host, $user, $pass, $db);

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Fungsi untuk menampilkan semua query dari database
function query($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// Fungsi Absolute URL
// Absolute url merupakan Serangkaian alamat yang menunjukkan suatu dokumen atau direktori, dengan menyertakan alamat domain atau host
function url($url = null)
{
    $url_utama = "http://localhost/pwdkelompok5";
    if ($url != null) {
        return $url_utama . '/' . $url;
    } else {
        return $url_utama;
    }
}
?>
