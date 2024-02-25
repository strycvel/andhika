<?php
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$IDulasan = $_POST['IDulasan'];
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$ulasan = $_POST['ulasan'];
$rating = $_POST['rating'];
 
// menginput data ke database
mysqli_query($koneksi,"INSERT into ulasanbuku(IDulasan,nama,judul,ulasan,rating)
 values('$IDulasan','$nama','$judul','$ulasan','$rating')");
 
// mengalihkan halaman kembali ke index.php
header("location:ulasan.php");
 
?>