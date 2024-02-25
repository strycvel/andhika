<?php
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$IDuser             = $_POST['IDuser'];
$IDbuku             = $_POST['IDbuku'];
$nama               = $_POST['nama'];
$judul              = $_POST['judul'];
$tgl_peminjaman     = date ('Y-m-d');
$tgl_pengembalian   = date('Y-m-d', strtotime ($tgl_peminjaman.'+day'));
$jumlah_peminjaman  = $_POST['jumlah_peminjaman'];
$status_peminjaman  = $_POST['status_peminjaman'];
$kode_pinjam  = $_POST['kode_pinjam'];
 
// menginput data ke database
$i =;
$query = mysqli_query($koneksi,"INSERT into peminjaman(IDuser, IDbuku,nama,judul, tgl_peminjaman, tgl_pengembalian,jumlah_peminjaman , status_peminjaman")
 values('$IDuser','$IDbuku','$nama','$judul','$tgl_peminjaman','$tgl_pengembalian','$jumlah_peminjaman','$status_peminjaman')");
 while($data
 
// mengalihkan halaman kembali ke index.php
header("location:peminjam.php");
 
?>
