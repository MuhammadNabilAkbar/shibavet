<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$nama_inap = $_POST['nama_inap'];
$telp_inap = $_POST['telp_inap'];
$kapasitas_inap = $_POST['kapasitas_inap'];
$jumlah_inap = $_POST['jumlah_inap'];
$waktu_inap = $_POST['waktu_inap'];

 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_bookinginap VALUES(NULL,'$nama_inap','$telp_inap','$kapasitas_inap','$jumlah_inap Hari','$waktu_inap','0','0','Checkout')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/checkoutinap.php?telp_inap=$telp_inap");       
 
?>