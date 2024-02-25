<?php
include 'header.php';
?>

<div class="container">
  <div class="row" style="margin-top: 1rem;">
  <div class="card ">
  <h2>Data Peminjaman</h2>
  <table class="table my-3">
        <thead>
            <tr>
            <th scope="col">ID Peminjaman</th>
            <th scope="col">ID Buku</th>
            <th scope="col">Nama Peminjam</th>
            <th scope="col">Judul Buku</th>
            <th scope="col">Peminjaman</th>
            <th scope="col">Pengembalian</th>
            <th scope="col">Jumlah </th>
            <th scope="col">Status </th>
            <th scope="col">Kode Peminjaman</th>
            <th scope="col"></th>
            </tr>
        </thead>
        
        <?php
          include '../koneksi.php';
          $data = mysqli_query($koneksi, "SELECT * FROM peminjaman");
          while($d=mysqli_fetch_array($data)){
        ?>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDpeminjaman'];?></th>
            <th scope="row"><?php echo $d['IDbuku'];?></th>
            <td><?php echo $d['nama'];?></td>
            <td><?php echo $d['judul'];?></td>
            <td><?php echo $d['tgl_peminjaman']; ?></td>
            <td><?php echo $d['tgl_pengembalian']; ?></td>
            <td><?php echo $d['jumlah_peminjaman'];?></td>
            <td><?php echo $d['status_peminjaman'];?></td>
            <td><?php echo $d['kode_pinjam'];?></td>

            <td>
            <a href="detail_peminjaman.php?IDpeminjaman=<?php echo $d['IDpeminjaman']; ?>" i class="fas fa-eye" style="text-decoration:none"></i></a>
            <a href="aksi_deletepnj.php?idp=<?php echo $d['IDpeminjaman']; ?>"onclick="return confirm('Apakah Anda yakin ingin menghapus peminjam ini?')" i class="fas fa-xmark" style="text-decoration:none"></i></a> 
            <a href="edit_peminjaman.php?idp=<?php echo $d['IDpeminjaman']; ?>" i class="fas fa-pen" style="text-decoration:none"></i></a> 
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