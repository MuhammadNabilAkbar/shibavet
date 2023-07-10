<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$nama_bdokter = $_POST['nama_bdokter'];
$telp_bdokter = $_POST['telp_bdokter'];
$pildok = $_POST['pildok'];
$waktu_bdokter = $_POST['waktu_bdokter'];

 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_bookingdokter VALUES(NULL,'$nama_bdokter','$telp_bdokter','$pildok','$waktu_bdokter','0','0','Checkout')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/checkoutdokter.php?telp_bdokter=$telp_bdokter");  
 
?>