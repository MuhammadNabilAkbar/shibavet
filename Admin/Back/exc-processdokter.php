<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_bdokter = $_GET['telp_bdokter'];
 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_bookingdokter SET status_bdokter='Selesai' WHERE telp_bdokter='$telp_bdokter'");
$alert = "Data berhasil terselesaikan";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/Data/process.php';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../Front/Data/process.php");  
 
?>