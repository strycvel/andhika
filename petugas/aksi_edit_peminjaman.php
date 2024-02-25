<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$IDpeminjaman       = $_POST['IDpeminjaman']; // Tambahkan baris ini untuk menangkap ID peminjaman
$IDbuku             = $_POST['IDbuku'];
$nama               = $_POST['nama'];
$judul              = $_POST['judul'];
$tgl_peminjaman     = $_POST['tgl_peminjaman']; // Jika Anda ingin tetap menggunakan tanggal yang ada dari form
$tgl_pengembalian   = $_POST['tgl_pengembalian']; // Jika Anda ingin tetap menggunakan tanggal yang ada dari form
$jumlah_peminjaman  = $_POST['jumlah_peminjaman'];
$status_peminjaman  = $_POST['status_peminjaman'];
$kode_pinjam        = $_POST['kode_pinjam'];

// menginput data ke database
$query = mysqli_query($koneksi, "UPDATE peminjaman SET IDbuku='$IDbuku', nama='$nama', judul='$judul', tgl_peminjaman='$tgl_peminjaman', tgl_pengembalian='$tgl_pengembalian', jumlah_peminjaman='$jumlah_peminjaman', status_peminjaman='$status_peminjaman', kode_pinjam='$kode_pinjam' WHERE IDpeminjaman='$IDpeminjaman'");

// mengecek apakah proses update berhasil
if ($query) {
    // Jika berhasil, alihkan kembali ke halaman peminjam.php
    header("location:peminjam.php");
} else {
    // Jika gagal, tampilkan pesan error atau lakukan tindakan lain sesuai kebutuhan
    echo "Error: " . mysqli_error($koneksi);
}
?>
