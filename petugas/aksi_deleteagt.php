<?php
    include '../koneksi.php';
    $id= $_GET['iduser'];

    mysqli_query($koneksi, "DELETE FROM user where iduser='$id'");

    header("location:anggota.php");
    
?>