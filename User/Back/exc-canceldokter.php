<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form

$telp_bdokter = $_GET['telp_bdokter'];

// menginput data ke database
mysqli_query($conn,"DELETE FROM tb_bookingdokter WHERE telp_bdokter = '$telp_bdokter'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/dokter.php");  
 
?>