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
                <h2>LAPORAN DATA ANGGOTA</h2>
                <h3>APLIKASI PERPUSTAKAAN DIGITAL ANDHIKA</h3>
                <span>Data ini merupakan data keseluruhan member perpustakaan</span>
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
    <div class="col mb-3">
            <table class="table">
            <tr>
            <th scope="col">IDUser</th>
            <th scope="col">NIS</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Alamat</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            </tr>
        </thead>
        <?php
          include '../koneksi.php';

          $data = mysqli_query($koneksi, "SELECT * FROM user");
          while($d=mysqli_fetch_array($data)){
        ?>
        <tr>
        <tbody>
            <tr>
            <th scope="row"><?php echo $d['IDuser'];?></th>
            <p><td><?php echo $d['nis'];?></td>
            <p><td><?php echo $d['namalengkap'];?></td>
            <p><td><?php echo $d['email'];?></td>
            <p><td><?php echo $d['alamat'];?></td>
            <p><td><?php echo $d['username'];?></td>
            <p><td><?php echo $d['password'];?></td>
            <p><td><?php echo $d['level'];?></td>
           </tr>        
  </tbody>
  <?php
    }
  ?>
</table>
</div>
            <div class="row">
                <div class="col">
                    <p style="line-geight: 1rem;">Mengetahui :</p>
                    <p>Kepala Dinas Perpustakaan Digital</p>
                    <p style="margin-top: 4rem;"><b>Andhika Putra Sahertian</p></tr>
                    </table>
                </div>
                <center><button onclick="cetak()" class="btn btn-success"><i class="bi bi-printer"></i>Cetak data</button>
            </div>
        
        
            <a href="laporan_peminjam.php">kembali</a>
            

        </div>
    
        <script>
        function cetak() {
            window.print();
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>