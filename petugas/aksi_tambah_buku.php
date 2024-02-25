<?php
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$judul          = $_POST['judul'];
$penulis        = $_POST['penulis'];
$penerbit       = $_POST['penerbit'];
$tahunterbit    = $_POST['tahunterbit']; // Menghapus tanda kurung kurawal yang tidak perlu
$foto           = $_FILES['foto']['name'];
$file           = $_FILES['foto']['tmp_name'];
$stok           = $_POST['stok'];
$sinopsis       = $_POST['sinopsis']; // Mengubah variabel $ulasan menjadi $sinopsis

// menginput data ke database
move_uploaded_file($file, 'asset/sampul/' . $foto);
mysqli_query($koneksi, "INSERT INTO buku VALUES('', '$judul', '$penulis', '$penerbit', '$tahunterbit', '$foto', '$stok', '$sinopsis')"); // Mengubah $ulasan menjadi $sinopsis
 
// mengalihkan halaman kembali ke index.php
header("location: databuku.php");
 
?>
