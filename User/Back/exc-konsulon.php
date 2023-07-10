<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$nama_konsulon = $_POST['nama_konsulon'];
$telp_konsulon = $_POST['telp_konsulon'];
$pildok = $_POST['pildok'];
$keluhan = $_POST['keluhan'];
$jenis_konsulon = $_POST['jenis_konsulon'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_konsulon VALUES(NULL,'$nama_konsulon','$telp_konsulon','$pildok','$keluhan','$jenis_konsulon','0','0','Checkout')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/checkoutkonsulon.php?telp_konsulon=$telp_konsulon");  
 
?>