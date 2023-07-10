<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$nama_grooming = $_POST['nama_grooming'];
$telp_grooming = $_POST['telp_grooming'];
$jumlah_grooming = $_POST['jumlah_grooming'];
$jenis_grooming = $_POST['jenis_grooming'];
$waktu_grooming = $_POST['waktu_grooming'];

 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_grooming VALUES(NULL,'$nama_grooming','$telp_grooming','$jumlah_grooming','$jenis_grooming','$waktu_grooming','0','0','Checkout')");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/checkoutgrooming.php?telp_grooming=$telp_grooming");  
 
?>