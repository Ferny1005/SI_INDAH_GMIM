<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$tgl = $_POST['tgl'];
$nomor = $_POST['nomor'];
$uraian = $_POST['uraian'];
$setoran = $_POST['setoran'];
$penarikan = $_POST['penarikan'];

// menginput data ke database
mysqli_query($koneksi,"insert into buku_bank values('','$tgl','$nomor','$uraian','$setoran','$penarikan')");

// mengalihkan halaman kembali ke index.php
header("location:index?p=t_bank");

?>