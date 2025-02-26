<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$jabatan = $_POST['jabatan'];

// menginput data ke database
mysqli_query($koneksi,"insert into pelsus values('','$nama','$jabatan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?p=table");

?>