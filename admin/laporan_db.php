<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan Data Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
            <div class="col text-center mt-3">
                <h2>LAPORAN DATA BUKU</h2>
                <h3>APLIKASI PERPUSTAKAAN DIGITAL ANDHIKA</h3>
                <span>Data ini merupakan data keseluruhan buku di perpustakaan</span>
            </div>
        </div>
      
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
                <!-- <a href="detail_buku.php?idbuku=<?php echo $d['IDbuku']; ?>" class="btn btn-warning text-white">Detail</a> -->
                <!-- <a href="" class="btn btn-success text-white">Edit</a>
                <a href="" class="btn btn-danger text-white">Hapus</a> -->
            </tr>
            <tr>
  </tbody>
  <?php
} ?>
</table>
</div>
            <div class="row">
                <div class="col">
                    <p style="line-geight: 1rem;">Mengetahui :</p>
                    <p>Kepala Dinas Perpustakaan Digital</p>
                    <p style="margin-top: 4rem;"><b>Andhika Putra Sahertian</p></tr>
                    </table>
                </div>
                <button onclick="cetak()" class="btn btn-success"><i class="bi bi-printer"></i>Cetak data</button>

            </div>
            <script>
        function cetak() {
            window.print();
        }
    </script>
        <div class="row">
            <a href="laporan_peminjam.php">kembali</a>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>