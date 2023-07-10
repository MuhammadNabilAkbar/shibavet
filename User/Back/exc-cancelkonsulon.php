<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form

$telp_konsulon = $_GET['telp_konsulo$telp_konsulon'];

// menginput data ke database
mysqli_query($conn,"DELETE FROM tb_konsulon WHERE telp_konsulon = '$telp_konsulon'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/konsulon.php");  
 
?>