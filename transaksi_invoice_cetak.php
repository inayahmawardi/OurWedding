
<!DOCTYPE html>
<html>
<head>
	<title>Our Wedding | Invoice </title>
	<link rel="stylesheet" type="text/css" href="_assets/css/bootstrap.css">
	<script type="text/javascript" src="_assets/js/jquery.js"></script>
	<script type="text/javascript" src="_assets/js/bootstrap.js"></script>
</head>
<body>

	<?php
	include 'koneksi.php'; ?>
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<?php
			//menangkap id yang dikirim melalui url
			$id = $_GET['id'];
			//mengambil data pelanggan yang ber id di atas dari tabel pelanggan
			$transaksi= mysqli_query($koneksi,"SELECT * FROM pemesanan,pelunasan WHERE ID_Pemesan='$id' AND ID_Pelunasan='$id'");
			while ($t=mysqli_fetch_array($transaksi)){
				?>
				<center><h2>INVOICE</h2></center>
				<h3></h3>
				<a href="transaksi_invoice_cetak.php?id=<?php echo $id;?>" target="_blank" class="btn btn-primary pull-right"><i class="glyphicon glyphicon-print"></i>CETAK</a>
				<br><br>
				<table class="table">
					<tr>
						<th width="20%">No.Invoice</th>
						<th>:</th>
						<td>INVOICE-<?php echo $t['ID_Pemesan'];?></td>
					</tr>
					<tr>
						<th width="20%">Tgl.Pesan</th>
						<th>:</th>
						<td><?php echo $t['Tanggal_Pemesanan'];?></td>
					</tr>
					<tr>
						<th>Nama Pelanggan</th>
						<th>:</th>
						<td><?php echo $t['Nama_Lengkap'];?></td>
					</tr>
					<tr>
						<th>HP</th>
						<th>:</th>
						<td><?php echo $t['Nomor_Telepon'];?></td>
					</tr>
					<tr>
						<th>Alamat</th>
						<th>:</th>
						<td><?php echo $t['Alamat_Rumah'];?></td>
					</tr>
					<tr>
						<th>Harga</th>
						<th>:</th>
						<td><?php echo "Rp.".number_format($t['Harga']).",-";?></td>
					</tr>
					
					<tr>
						<th>Status</th>
						<th>:</th>
						<td><?php echo $t['Catatan_Pelunasan'];?></td>
					</tr>
					
				</table>
				
				<br>
				<p><center><i>"Terima kasih telah mempercayakan pesanan anda pada kami".</i></center></p>
			<?php } ?>
		</div>
	</div>
	<script type="text/javascript">
		window.print();
	</script>
</body>
</html>