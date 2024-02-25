<!DOCTYPE html>
<html>
<head>
    <title>Contoh</title>
</head>
<body>
    <center>
        <div class="container">
            <h2>LAPORAN DATA PEMINJAMAN</h2>
            <h1>APLIKASI PERPUSTAKAAN DIGITAL</h1>
            <span>Data ini merupakan data keseluruhan peminjaman di perpustakaan</span>
            <br>
            <form method="POST">
                <table>
                    <tr>
                        <td>Dari Tanggal</td>
                        <td><input type="date" name="dari_tgl" required="required"></td>
                        <td>Sampai Tanggal</td>
                        <td><input type="date" name="sampai_tgl" required="required"></td>
                        <td><input type="submit" class="btn btn-danger" name="filter" value="Filter"></td>
                    </tr>
                </table>
            </form>
            <br>

            <br>
            <div class="col">
    <div class="card">
            <table class="table mb-2">
        <thead>
            <tr>
                                <th scope="col">ID Peminjaman</th>
                                <th scope="col">ID User</th>
                                <th scope="col">ID Buku</th>
                                <th scope="col">Nama Peminjam</th>
                                <th scope="col">Judul Buku</th>
                                <th scope="col">Tanggal Peminjaman</th>
                                <th scope="col">Tanggal Pengembalian</th>
                                <th scope="col">Jumlah Peminjaman</th>
                                <th scope="col">Status Peminjaman</th>
                                <th scope="col">Kode Peminjaman</th>
                            </tr>
                        </thead>
                        <?php
                        include '../koneksi.php';
                        $no = 1;

                        if (isset($_POST['filter'])) {
                            $dari_tgl = mysqli_real_escape_string($koneksi, $_POST['dari_tgl']);
                            $sampai_tgl = mysqli_real_escape_string($koneksi, $_POST['sampai_tgl']);
                            $data = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON user.IDuser = peminjaman.IDuser LEFT JOIN buku ON buku.IDbuku=peminjaman.IDbuku WHERE tgl_peminjaman BETWEEN '$dari_tgl' AND '$sampai_tgl'");
                            if (!$data) {
                                die("Query Error: " . mysqli_error($koneksi));
                            }
                            
                        } else {
                            $data = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user ON user.IDuser = peminjaman.IDuser LEFT JOIN buku ON buku.IDbuku=peminjaman.IDbuku");
                            if (!$data) {
                                die("Query Error: " . mysqli_error($koneksi));
                            }
                        }

                        while ($tampil = mysqli_fetch_array($data)) {
                        ?>
 
   
   


                        
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $tampil['IDpeminjaman']; ?></td>
                                <td><?php echo $tampil['IDuser']; ?></td>
                                <td><?php echo $tampil['IDbuku']; ?></td>
                                <td><?php echo $tampil['nama']; ?></td>
                                <td><?php echo $tampil['judul']; ?></td>
                                <td><?php echo $tampil['tgl_peminjaman']; ?></td>
                                <td><?php echo $tampil['tgl_pengembalian']; ?></td>
                                <td><?php echo $tampil['jumlah_peminjaman']; ?></td>
                                <td><?php echo $tampil['status_peminjaman']; ?></td>
                                <td><?php echo $tampil['kode_pinjam']; ?></td>
                                <td>

                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </table>
                    <div class="row">
                        <div class="col">
                            <p style="line-height: 2rem;">Mengetahui :</p>
                            <p>Kepala Dinas Perpustakaan Digital</p>
                            <p style="margin-top: 4rem;"><b>Andhika Putra Sahertian</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button onclick="cetak()" class="btn btn-success"><i class="bi bi-printer"></i>Cetak data</button>
    </center>

    <script>
        function cetak() {
            window.print();
        }
    </script>
</body>
</html>
