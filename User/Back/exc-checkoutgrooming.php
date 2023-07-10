<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_grooming = $_POST['telp_grooming'];
$total_grooming = $_POST['total_grooming'];
$metode_pembayaran = $_POST['metode_pembayaran'];

 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_grooming SET total_grooming='$total_grooming',metode_pembayaran='$metode_pembayaran',status_grooming='Menunggu Pembayaran' WHERE telp_grooming='$telp_grooming'");
$alert = "Jika anda sudah melakukan pembayaran,CS kami akan segera menghubungi";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/dashboard';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../../User/Front/dashboard");  
 
?>