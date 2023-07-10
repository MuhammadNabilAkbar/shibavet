<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_inap = $_POST['telp_inap'];
$total_inap = $_POST['total_inap'];
$metode_pembayaran = $_POST['metode_pembayaran'];

 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_bookinginap SET total_inap='$total_inap',metode_pembayaran='$metode_pembayaran',status_inap='Menunggu Pembayaran' WHERE telp_inap='$telp_inap'");
$alert = "Jika anda sudah melakukan pembayaran,CS kami akan segera menghubungi";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/dashboard';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../../User/Front/dashboard");  

 
?>