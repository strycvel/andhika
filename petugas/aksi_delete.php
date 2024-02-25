<?php
    include '../koneksi.php';
    $id= $_GET['idbuku'];

    mysqli_query($koneksi, "DELETE FROM buku where IDbuku='$id'");

    header("location:databuku.php");
?>