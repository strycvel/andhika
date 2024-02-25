<?php
// koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$IDulasan   = $_POST['IDulasan']; // Perubahan: Sesuaikan dengan nama yang benar dari input form
$nama       = $_POST['nama'];
$judul      = $_POST['judul'];
$ulasan     = $_POST['ulasan'];
$rating     = $_POST['rating'];

// menginput data ke database
$query = mysqli_query($koneksi, "UPDATE ulasanbuku SET nama='$nama', judul='$judul', ulasan='$ulasan', rating='$rating' WHERE IDulasan='$IDulasan'");

// mengecek apakah proses update berhasil
if ($query) {
    // Jika berhasil, alihkan kembali ke halaman ulasan.php
    header("location:ulasan.php");
} else {
    // Jika gagal, tampilkan pesan error atau lakukan tindakan lain sesuai kebutuhan
    echo "Error: " . mysqli_error($koneksi);
}
?>
