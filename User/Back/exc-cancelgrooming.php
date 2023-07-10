<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form

$telp_grooming = $_GET['telp_grooming'];

// menginput data ke database
mysqli_query($conn,"DELETE FROM tb_grooming WHERE telp_grooming = '$telp_grooming'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/grooming.php");  
 
?>