<?php
// Menghubungkan ke file koneksi
include 'koneksi.php';

// Menangkap data yang dikirim dari form
$id_pemesan = $_POST['id_pemesan'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_pasangan = $_POST['nama_pasangan'];
$alamat_rumah = $_POST['alamat_rumah'];
$pilihan_gedung = $_POST['pilihan_gedung'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat_email = $_POST['alamat_email'];
$tanggal_pemesanan = $_POST['tanggal_pemesanan'];
$harga = $_POST['harga'];
$dp = $_POST['dp'];

// Update data pemesanan
$query = "UPDATE pemesanan SET 
            Nama_Lengkap = '$nama_lengkap',
            Nama_Pasangan = '$nama_pasangan',
            Alamat_Rumah = '$alamat_rumah',
            Pilihan_Gedung = '$pilihan_gedung',
            Nomor_Telepon = '$nomor_telepon',
            Alamat_Email = '$alamat_email',
            Tanggal_Pemesanan = '$tanggal_pemesanan',
            Harga = '$harga',
            DP = '$dp'
          WHERE ID_Pemesan = '$id_pemesan'";

$result = mysqli_query($koneksi, $query);

// Cek apakah update berhasil
if ($result) {
    // Jika berhasil, alihkan ke halaman yang sesuai
    header("location:pelanggan.php");
} else {
    // Jika gagal, tampilkan pesan error
    echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
}

// Menutup koneksi
mysqli_close($koneksi);
?>
