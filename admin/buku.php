<?php
include 'header.php';
?>
  <div class="container">
  <div class="row" style="margin-top: 1rem;">
  <div class="card mb-2">
  <h2>Data Buku</h2>
  <div class="col">
  <div class="card">
            <table class="table mb-2">
            <thead>
            <tr>
            <th scope="col">ID Buku </th>
            <th scope="col">Judul</th>
            <th scope="col">Penulis</th>
            <th scope="col">Penerbit</th>
            <th scope="col">Tahun Terbit</th>
            <th scope="col">Stok</th>
            <th scope="col"></th>
            </tr>
      </thead>
      <?php
      include '../koneksi.php';
      $data = mysqli_query($koneksi, "SELECT * FROM buku");
      while($d=mysqli_fetch_array($data)){
      ?>
      <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDbuku'];?></th>
            <td><?php echo $d['judul'];?></td>
            <td><?php echo $d['penulis'];?></td>
            <td><?php echo $d['penerbit'];?></td>
            <td><?php echo $d['tahunterbit'];?></td>
            <td><?php echo $d['stok'];?></td>
            <td>
            <a href="detail_buku.php?idbuku=<?php echo $d['IDbuku']; ?>" i class="fas fa-eye" style="text-decoration:none"></i></a>
        </tr>
        <tr>
        </tbody>
        <?php
          } 
        ?>
</table>
</div>
</div>
</div>
<?php
include 'footer.php';
?>