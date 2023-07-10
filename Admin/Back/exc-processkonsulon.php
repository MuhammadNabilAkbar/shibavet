<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_konsulon = $_GET['telp_konsulon'];
 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_konsulon SET status_konsulon='Selesai' WHERE telp_konsulon='$telp_konsulon'");
 
$alert = "Data berhasil terselesaikan";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/Data/process.php';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../Front/Data/process.php");  
 
?>