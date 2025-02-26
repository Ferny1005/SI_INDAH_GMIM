<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$letak = $_POST['letak'];
$letak_lembaga = $_POST['letak_lembaga'];
$status = $_POST['status'];
$luas = $_POST['luas'];
$olah = $_POST['olah'];
$bukti = $_POST['bukti'];
$penggunaan = $_POST['penggunaan'];
$pencatatan = $_POST['pencatatan'];
$nis = $_POST['nis'];
$keterangan = $_POST['keterangan'];

// menginput data ke database
mysqli_query($koneksi,"insert into inven_tanah values('','$letak','$letak_lembaga','$status','$luas','$olah','$bukti','$penggunaan','$pencatatan','$nis','$keterangan')");

// mengalihkan halaman kembali ke index.php
header("location:index.php?p=inven_tanah");

?>