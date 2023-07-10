<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$jenisgrooming = $_POST['jenisgrooming'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_mst_jenisgrooming VALUES(NULL,'$jenisgrooming')");
 
// mengalihkan halaman kembali ke index.php
header('Location:../Front/Master/master_jenisgrooming.php');
?>