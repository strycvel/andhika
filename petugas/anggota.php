<?php
include 'header.php';
?>

<div class="container">
  
  <div class="card-transparant">
    
  <div class="row-transparant" style="margin-top: 3rem;">
  
  <h2>Data Anggota</h2>
  <a href="tambah_anggota.php" class="btn btn-success text-white my-3">Tambah Anggota</a>
    <div class="col">
      
            <table class="table">
              
        <thead>
            <tr>
            <th scope="col">ID User</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Alamat</th>
            <th scope="col">Level</th>
            <th></th>
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
            <td><?php echo $d['username'];?></td>
            <td><?php echo $d['password'];?></td>
            <td><?php echo $d['alamat'];?></td>
            <td><?php echo $d['level'];?></td>
            <td>
                <a href="detail_anggota.php?iduser=<?php echo $d['IDuser']; ?>"i class="fas fa-eye" style="text-decoration:none"></i></a>
                <a href="aksi_deleteagt.php?iduser=<?php echo $d['IDuser']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus anggota ini?')" class="fas fa-trash" style="text-decoration:none"></a>
            </tr>
            <tr>
  </tbody>
  
  <?php
    }
  ?>
</div>
</div>
  
</div>

<?php
include 'footer.php';
?>