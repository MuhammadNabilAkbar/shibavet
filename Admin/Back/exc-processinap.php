<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_inap = $_GET['telp_inap'];
 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_bookinginap SET status_inap='Selesai' WHERE telp_inap='$telp_inap'");
$alert = "Data berhasil terselesaikan";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/Data/process.php';</script>";
 
// mengalihkan halaman kembali ke index.php
// header("location:../Front/Data/process.php");  
 
?>