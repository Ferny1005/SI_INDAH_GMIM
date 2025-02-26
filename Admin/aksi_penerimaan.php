<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$no_ma = $_POST['no_ma'];
$no_bukti = $_POST['no_bukti'];
$keterangan = $_POST['keterangan'];
$masuk = $_POST['masuk'];
$tgl = $_POST['tgl'];
// menginput data ke database
mysqli_query($koneksi,"insert into kas_umum values('','$no_ma','$no_bukti','$keterangan','$masuk','','$tgl')");

header("location:index.php");
?>