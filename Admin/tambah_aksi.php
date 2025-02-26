<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$satuan = $_POST['satuan'];
$harga = $_POST['harga'];
$keadaan_baik = $_POST['keadaan_baik'];
$keadaan_sedang = $_POST['keadaan_sedang'];
$keadaan_rusak = $_POST['keadaan_rusak'];
$lokasi = $_POST['lokasi'];
$keterangan = $_POST['keterangan'];

// menginput data ke database
mysqli_query($koneksi,"insert into inventaris values('','$tanggal','$jenis','$satuan','$harga','$keadaan_baik','$keadaan_sedang','$keadaan_rusak','$lokasi','$keterangan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?p=inventaris");

?>