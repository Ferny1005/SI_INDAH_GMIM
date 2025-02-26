<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$no_ma = $_POST['no_ma'];
$ma = $_POST['ma'];

// menginput data ke database
mysqli_query($koneksi,"insert into ma_pendapatan values('','$no_ma','$ma')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?p=ma");

?>