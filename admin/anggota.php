<?php
include 'header.php';
?>
  <div class="container">
  <div class="card">
  <div class="row" style="margin-top: 3rem;">
  <h2>&nbsp;Data Anggota</h2>
  <div class="col">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Level</th>
            </tr>
        </thead>
        <?php
        include '../koneksi.php';
        $data = mysqli_query($koneksi, "SELECT * FROM user");
        while($d=mysqli_fetch_array($data)){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDuser'];?></th>
            <td><?php echo $d['nis'];?></td>
            <td><?php echo $d['namalengkap'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['level'];?></td>
            <td>
            <a href="detail_anggota.php?iduser=<?php echo $d['IDuser']; ?>"i class="fas fa-eye" style="text-decoration:none"></i></a>
            </tr>
            <tr>             
  </tbody> 
  <?php
    }
  ?>
</table>  
  </div>
</div>
<?php
include 'footer.php';
?>