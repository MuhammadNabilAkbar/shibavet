<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_users VALUES(NULL,'$username','$password','$role')");
$alert = "Berhasil menginput data baru";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/Master/master_account.php';</script>";
// mengalihkan halaman kembali ke index.php
// header('Location:../Front/Master/master_account.php');
?>