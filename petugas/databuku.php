<?php
include 'header.php';
?>

<div class="container" style="margin-top: 2rem;">

<div class="row m-5">
  
<h4>Data Buku</h4>
<a href="tambah_buku.php" class="btn btn-success text-white my-2">Tambah Buku</a>

<?php
  include '../koneksi.php';
  $no =1;
  $data= mysqli_query($koneksi, "SELECT * FROM buku Order by IDbuku asc");

  while($d = mysqli_fetch_array($data)){
?>

          <div class="card" style="width: 15rem;">
          <img src="../petugas/asset/sampul/<?php echo $d['foto'];?>"  class="card-img-top" alt="...">
          <div class="card-body">
          <h5 class="card-title"><?php echo $d['judul']; ?></h5>
          <h6>Tahun terbit : <?php echo $d['tahunterbit']; ?></h6>
          <a href="detail_buku.php?idbuku=<?php echo $d['IDbuku'];?>" class="btn btn-success">Detail</a>
          <a href="aksi_delete.php?idbuku=<?php echo $d['IDbuku']; ?>"onclick="return confirm('Apakah Anda yakin ingin menghapus buku ini?')" class="btn btn-danger text-white">Hapus</a>
          
        </div>
      </div>
      
<?php
}
?>
</div>
</div>
<?php
include 'footer.php';
?>
