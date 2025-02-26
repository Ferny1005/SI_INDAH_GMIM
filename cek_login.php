<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
 
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	if($data['level']=="Admin"){
 
		$_SESSION['nama'] = $data["nama"];
		$_SESSION['level'] = "Admin";
		header("location:admin/");
 
	}else if($data['level']=="User"){
		$_SESSION['nama'] = $data["nama"];
		$_SESSION['level'] = "User";
		header("location:admin/user.php");
 
	}else{
 
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>