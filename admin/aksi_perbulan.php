<?php
                include '../koneksi.php';
                if(isset($_GET['submit'])) {
                    if (isset($_GET['bulan'])) {
                        $bulan = $_GET['bulan'];
                    } else {
                        $bulan = date('m'); // Bulan saat ini
                    }
                    // Peroleh tahun saat ini
                    $tahun = date('Y');
                    $data = mysqli_query($koneksi, "SELECT * FROM peminjaman WHERE MONTH(tgl_peminjaman) = $bulan AND YEAR(tgl_peminjaman) = $tahun");
                    while($d=mysqli_fetch_array($data)) {
                    }
                }
                ?>