<?php
    include '../koneksi.php';
    $id= $_GET['idp'];

    mysqli_query($koneksi, "DELETE FROM ulasanbuku where IDulasan='$id'");
    header("location:ulasan.php");
?>