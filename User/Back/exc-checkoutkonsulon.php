<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$telp_konsulon = $_POST['telp_konsulon'];
$total_konsulon = $_POST['total_konsulon'];
$metode_pembayaran = $_POST['metode_pembayaran'];

 
// menginput data ke database
mysqli_query($conn,"UPDATE tb_konsulon SET total_konsulon='$total_konsulon',metode_pembayaran='$metode_pembayaran',status_konsulon='Menunggu Pembayaran' WHERE telp_konsulon='$telp_konsulon'");
$alert = "Jika anda sudah melakukan pembayaran,CS kami akan segera menghubungi";
echo "<script type='text/javascript'>alert('$alert');
window.location.href='../Front/dashboard';</script>";
// mengalihkan halaman kembali ke index.php
// header("location:../../User/Front/dashboard");  
 
?>