<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_grooming = $_GET['telp_grooming'];
 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_grooming SET status_grooming='Selesai' WHERE telp_grooming='$telp_grooming'");
$alert = "Data berhasil terselesaikan";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/Data/process.php';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../Front/Data/process.php");  
 
?>