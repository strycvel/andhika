<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
  <style>
  body {
    background: url(../img/matcha.jpg) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}

</style>
    <div class="container" style="margin-top: 5rem;">
        <div class="card-transparant">
            <div class="row">
            <?php
                include '../koneksi.php';
                if(isset($_GET['IDpeminjaman'])){
                    $idp = $_GET['IDpeminjaman'];
                }else{
                    die("Eror, Data Tidak Ditemukan");
                }
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpeminjaman='$idp'");
                $result = mysqli_fetch_array($query);
            ?>
                
                <div class="col m-5">
                <h2>Detail Peminjaman</h2>
            <a href="peminjam.php" class="btn btn-danger text-white">Kembali</a>

                <hr>
                <table>
                    <tr>
                        <td><h5>ID Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['IDpeminjaman']; ?></h5></td>
                    </tr>
                    
                    <tr>
                        <td><h5>ID Buku</h5></td>
                        <td><h5>: <?php echo $result['IDbuku']; ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Nama Peminjam</h5></td>
                        <td><h5>: <?php echo $result['nama']; ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['tgl_peminjaman']; ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Tanggal Pengembalian</h5></td>
                        <td><h5>: <?php echo $result['tgl_pengembalian']; ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Jumlah Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['jumlah_peminjaman']; ?></h5></td>
                    </tr>
                    <tr>
                        <td><h5>Kode Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['kode_pinjam']; ?></h5></td>
                    </tr>
                    <tr class="bg-warning text-danger">
                        <td><h5>Status Peminjaman</h5></td>
                        <td><h5>: <?php echo $result['status_peminjaman']; ?></h5></td>
                    </tr>
                    
                </table>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>