<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Peminjaman</title>
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
            if(isset($_GET['idp'])){
                $id = $_GET['idp'];
                $query = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE IDpeminjaman='$id'");
                $result = mysqli_fetch_array($query);
            } else {
                die("Error, Data Tidak Ditemukan");
            }
            ?>
            <div class="col" style="margin-top: 1rem;">
                <h2>Edit Peminjaman</h2>
                <form action="aksi_edit_peminjaman.php" method="POST" enctype="multipart/form-data">
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Peminjaman</label>
                        <input type="text" name="IDpeminjaman" class="form-control" required value="<?php echo $result['IDpeminjaman']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">ID Buku</label>
                        <input type="text" name="IDbuku" class="form-control" required value="<?php echo $result['IDbuku']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required value="<?php echo $result['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                        <input type="text" name="judul" class="form-control" required value="<?php echo $result['judul']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" name="tgl_peminjaman" class="form-control" required value="<?php echo $result['tgl_peminjaman']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal Pengembalian</label>
                        <input type="date" name="tgl_pengembalian" class="form-control" required value="<?php echo $result['tgl_pengembalian']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Jumlah Peminjaman</label>
                        <input type="text" name="jumlah_peminjaman" class="form-control" required value="<?php echo $result['jumlah_peminjaman']; ?>">
                    </div>
                    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Status Peminjaman</label>
    <select class="form-select" name="status_peminjaman" required>
        <option value="dipinjam" <?php if($result['status_peminjaman'] == "dipinjam") echo "selected"; ?>>Dipinjam</option>
        <option value="dikembalikan" <?php if($result['status_peminjaman'] == "dikembalikan") echo "selected"; ?>>Dikembalikan</option>
    </select>
</div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kode Peminjaman</label>
                        <input type="text" name="kode_pinjam" class="form-control" required value="<?php echo $result['kode_pinjam']; ?>">
                    </div>
                    <!-- Tambahkan sisa input di sini sesuai kebutuhan -->
                    <a href="peminjam.php" class="btn btn-danger text-white">Kembali</a>
                    <button type="submit" class="btn btn-success">Ubah</button>
                    <hr>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
