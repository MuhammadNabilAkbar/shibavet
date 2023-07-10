<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form

$telp_inap = $_GET['telp_inap'];

// menginput data ke database
mysqli_query($conn,"DELETE FROM tb_bookinginap WHERE telp_inap = '$telp_inap'");
 
// mengalihkan halaman kembali ke index.php
header("location:../../User/Front/forms/inap.php");  
 
?>