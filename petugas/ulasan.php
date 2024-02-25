<?php
include 'header.php';
?>



<div class="container">
  <div class="row" style="margin-top: 1rem;">
  <div class="card ">
  <h2>Ulasan Buku</h2>
  <table class="table my-3">
        <thead>
            <tr>
            <th scope="col">ID Ulasan</th>
            <th scope="col">Nama</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Ulasan</th>
            <th scope="col">Rating</th>
            </tr>
        </thead>
        <?php
          include '../koneksi.php';
          $data = mysqli_query($koneksi, "SELECT * FROM ulasanbuku");
          while($d=mysqli_fetch_array($data)){
        ?>
        <tbody>
            <tr>
            <td><?php echo $d['IDulasan'];?></th>
            <td><?php echo $d['nama'];?></th>
            <td><?php echo $d['judul'];?></th>
            <td><?php echo $d['ulasan'];?></td>
            <td><?php echo $d['rating'];?></td>
            <td>
           </td>
          </tr>        
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

