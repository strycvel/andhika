<?php
// Include file koneksi
include '../koneksi.php';

// Cek apakah tombol submit telah diklik atau tidak
if(isset($_POST['submit'])) {
    // Mengambil data yang dikirim melalui form
    $idbuku = $_POST['IDbuku'];
    $nama = $_POST['nama'];
    $judul = $_POST['judul'];
    $tgl_peminjaman = $_POST['tgl_peminjaman'];
    $tgl_pengembalian = $_POST['tgl_pengembalian'];
    $jumlah_peminjaman = $_POST['jumlah_peminjaman'];
    $kode_pinjam = $_POST['kode_pinjam'];
    $status_peminjaman = $_POST['status_peminjaman'];
    
    // Query untuk menambahkan data peminjaman
    $query = "INSERT INTO peminjaman (IDbuku, nama, judul, tgl_peminjaman, tgl_pengembalian, jumlah_peminjaman, kode_pinjam, status_peminjaman) 
              VALUES ('$idbuku', '$nama', '$judul', '$tgl_peminjaman', '$tgl_pengembalian', '$jumlah_peminjaman', '$kode_pinjam', '$status_peminjaman')";
    
    // Eksekusi query
    $result = mysqli_query($koneksi, $query);
    
    // Cek jika proses penyimpanan data berhasil
    if($result) {
        // Jika berhasil, redirect ke halaman buku.php
        header("Location: buku.php");
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
    
    // Menutup koneksi database
    mysqli_close($koneksi);
}
?>
