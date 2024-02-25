<?php
include 'header.php';
?>

<div class="container">
  <?php
  include '../koneksi.php';
  $buku = mysqli_query($koneksi, "SELECT * FROM buku");
  $user = mysqli_query($koneksi, "SELECT * FROM user");
  $peminjaman = mysqli_query($koneksi, "SELECT * FROM peminjaman");

  $b= mysqli_num_rows($buku);
  $u= mysqli_num_rows($user);
  $i= mysqli_num_rows($peminjaman);
  ?>
  <div class="row my-3">
<div class="col-sm-3">
  <div class="card">
    <div class="card-body text-white text-center bg-warning">
      
      <h2>Data Anggota</h2>
      <h1><b><?php echo $u;?></b></h1>
    </div>
    <a href="anggota.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
  </div>
</div>
<div class="col-sm-3">
  <div class="card">
    <div class="card-body text-white text-center bg-success">
      <h2>Data Buku</h2>
      <h1><b><?php echo $b;?></b></h1>
    </div>
    <a href="databuku.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
  </div>
</div>
<div class="col-sm-3">
  <div class="card">
    <div class="card-body text-white text-center bg-primary">
      <h2>Data Peminjam</h2>
      <h1><b><?php echo $i;?></b></h1>
    </div>
    <a href="peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
  </div>
</div>
<div class="col-sm-3">
  <div class="card">
    <div class="card-body text-white text-center bg-primary">
      <h2>Data Laporan</h2>
      <h1><b><?php echo $i;?></b></h1>
    </div>
    <a href="laporan_peminjam.php" class="btn btn-dark btn-sm">Lihat Selengkapnya</a>
  </div>
</div>

</div>
</div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-7" style="margin-top: 5rem;">
      <h3>SELAMAT DATANG</h3>
      <h5>di Halaman Admin Perpustakaan Digital</h5>
      <samp>Mari membaca, Agar wawasanmu bertambah banyak seluas samudra</samp>
    </div>
    <div class="col-sm-5">
      <img src="../img/logoo.png" width="500" alt="">
    </div>
  </div>
</div>

<?php
include 'footer.php';
?>