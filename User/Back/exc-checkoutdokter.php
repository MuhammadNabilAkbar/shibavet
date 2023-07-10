<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_bdokter = $_POST['telp_bdokter'];
$metode_pembayaran = $_POST['metode_pembayaran'];

 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_bookingdokter SET metode_pembayaran='$metode_pembayaran',status_bdokter='Menunggu Pembayaran' WHERE telp_bdokter='$telp_bdokter'");
$alert = "Silahkan tunggu,Dokter kami akan segera menghubungi";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/dashboard';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../../User/Front/dashboard");  
 
?>