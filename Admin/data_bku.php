<!DOCTYPE html>
<html>
<head>
	<title>Buku Kas Umum</title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
 <center>
	<h2>BUKU KAS UMUM</h2>
	     <h3>JEMAAT GMIM BETHESDA WILAYAH TATELU</h3>
	</center>
	<br/>
	<form action="data_bku" method="get" >
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">Periode</label>
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="dari" required>
                    </div>
                    <div class="col-auto">
                        -
                    </div>
                    <div class="col-auto">
                        <input type="date" class="form-control" name="ke" required>
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
	<br/>
	<table border="1" align="center" width="100%" class="table table-striped">
		<thead>
			<th>NO</th>
			<th>No. MA</th>
			<th>No. BUKTI</th>
			<th>KETERANGAN</th>
			<th>PENERIMAAN</th>
			<th>PENGELUARAN</th>
			<th>SALDO</th>
		</thead>
		<?php 
		include '../koneksi.php';
if(isset($_GET['dari']) && isset($_GET['ke'])){  
                                $data = mysqli_query($koneksi, "select *, SUM(masuk) OVER (ORDER BY tgl ASC, id ASC) as saldo from kas_umum WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."' and masuk != '0'");
                            }else{                      
                                $data = mysqli_query($koneksi,"select *, SUM(masuk) OVER (ORDER BY tgl ASC, id ASC) as saldo from kas_umum where masuk != '0'");		
                            }      
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['no_ma']; ?></td>
				<td><?php echo $d['no_bukti']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td>Rp. <?php echo $d['masuk']; ?></td>
				<td></td>
				<td>Rp.<?php echo $d['saldo']; ?></td>
			</tr>
			<?php 
		}
		?>
			
<?php 
		include '../koneksi.php';
if(isset($_GET['dari']) && isset($_GET['ke'])){  
                                $data = mysqli_query($koneksi, "select *, SUM(masuk) as hasil from kas_umum WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."' and masuk != '0'");
                            }else{                      
                                $data = mysqli_query($koneksi,"select *, SUM(masuk) as hasil from kas_umum where masuk != '0'");		
                            }      
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td colspan="4" align="center">TOTAL PENERIMAAN</td>
				<td>Rp. <?php echo $d['hasil']; ?></td>
				<td></td>
				<td></td>
			</tr>
			<?php 
		}
		?>

			
		<?php 
		include '../koneksi.php';
if(isset($_GET['dari']) && isset($_GET['ke'])){  
                                $data = mysqli_query($koneksi, "select *, SUM(masuk-keluar) OVER (ORDER BY tgl ASC, id ASC) as saldo from kas_umum WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."' and keluar != '0'");
                            }else{                      
                                $data = mysqli_query($koneksi,"select *, SUM(masuk - keluar) OVER (ORDER BY tgl ASC, id ASC) as saldo from kas_umum where keluar != '0'");		
                            }      
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['no_ma']; ?></td>
				<td><?php echo $d['no_bukti']; ?></td>
				<td><?php echo $d['keterangan']; ?></td>
				<td></td>
				<td>Rp. <?php echo $d['keluar']; ?></td>
				<td>Rp.<?php echo $d['saldo']; ?></td>
			</tr>
				<?php 
		}
		?>

<?php 
		include '../koneksi.php';
if(isset($_GET['dari']) && isset($_GET['ke'])){  
                                $data = mysqli_query($koneksi, "select *, SUM(keluar) as hasil from kas_umum WHERE tgl BETWEEN '".$_GET['dari']."' and '".$_GET['ke']."' and keluar != '0'");
                            }else{                      
                                $data = mysqli_query($koneksi,"select *, SUM(keluar) as hasil from kas_umum where keluar != '0'");		
                            }      
		$no = 1;
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td colspan="4" align="center">TOTAL PENGELUARAN</td>
				<td></td>
				<td>Rp. <?php echo $d['hasil']; ?></td>
				<td></td>
			</tr>
			<?php 
		}
		?>
		
	</table>
</body>
</html>