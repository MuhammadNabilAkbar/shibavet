<?php 
// koneksi database
include 'conn.php';
 
// menangkap data yang di kirim dari form
$nama_dokter = $_POST['nama_dokter'];
$keahlian_dokter = $_POST['keahlian_dokter'];
$harga_dokter = $_POST['harga_dokter'];
$keterangan_dokter = $_POST['keterangan_dokter'];
 
// menginput data ke database
mysqli_query($conn,"INSERT INTO tb_mst_dokter VALUES(NULL,'$nama_dokter','$keahlian_dokter','Rp $harga_dokter','$keterangan_dokter')");
 
// mengalihkan halaman kembali ke index.php
header('Location:../Front/Master/master_dokter.php');
?>