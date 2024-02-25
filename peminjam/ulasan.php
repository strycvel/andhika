<?php
include 'header.php';
?>

<div class="container">
    <div class="row" style="margin-top: 1rem;">
        <div class="card">
            <h2>Ulasan Buku</h2>
            <table class="table my-3">
                <thead>
                    <tr>
                        <th scope="col">ID Ulasan</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Judul Buku</th>
                        <th scope="col">Ulasan</th>
                        <th scope="col">Rating</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <?php
                include '../koneksi.php';
                $data = mysqli_query($koneksi, "SELECT * FROM ulasanbuku");
                while ($d = mysqli_fetch_array($data)) {
                ?>
                    <tbody>
                        <tr>
                            <td><?php echo $d['IDulasan']; ?></td>
                            <td><?php echo $d['nama']; ?></td>
                            <td><?php echo $d['judul']; ?></td>
                            <td><?php echo $d['ulasan']; ?></td>
                            <td><?php echo $d['rating']; ?></td>
                            <td>
                            <a href="aksi_deleteuls.php?idp=<?php echo $d['IDulasan']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ulasan ini?')"><i class="fas fa-times" style="text-decoration:none"></i></a>
                            <a href="edit_ulasan.php?idp=<?php echo $d['IDulasan']; ?>" i class="fas fa-pen" style="text-decoration:none"></i></a> 

                            </td>
                        </tr>
                    </tbody>
                <?php
                }
                ?>
            </table>
            <a href="tambah_ulasan.php" class="btn btn-success text-white my-3">Tambah Ulasan</a>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>
