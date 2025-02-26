<!DOCTYPE html>
<html>
<head>
	<title>Buku Kas Umum</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
 <center>
	<h2>BUKU BANK</h2>
	     <h3>JEMAAT GMIM BETHESDA WILAYAH TATELU</h3>
	</center>
	<br/>
	<table border="1" align="center" width="100%" class="table table-striped">
		<thead>
			<th>No.</th>
			<th>Tanggal</th>
			<th>No. Bukti Kas</th>
			<th>Uraian</th>
			<th>Setoran</th>
			<th>Penarikan</th>
			<th>Saldo</th>
		</thead>
		<?php 
		include '../koneksi.php';
         $data = mysqli_query($koneksi,"select * from buku_bank");	
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['tgl']; ?></td>
				<td><?php echo $d['nomor']; ?></td>
				<td><?php echo $d['uraian']; ?></td>
				<td>Rp.<?php echo $d['setoran']; ?></td>
				<td>Rp.<?php echo $d['penarikan']; ?></td>
			</tr>
			<?php 
		}
		?>
			

	</table>
</body>
</html>