<?php 
// koneksi database
include '../koneksi.php';

// menangkap data id yang di kirim dari url
$id_barang = $_GET['id_barang'];


// menghapus data dari database
mysqli_query($koneksi,"delete from inventaris where id_barang='$id_barang'");

// mengalihkan halaman kembali ke index.php
header("location:index.php?p=inventaris");

?>