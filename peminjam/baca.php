<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reading Pages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
     <?php 
      include '../koneksi.php';
      if(isset($_GET['idbaca'])) {
        $id = $_GET['idbaca'];
      }
      $sql= mysqli_query($koneksi, "SELECT * from buku where IDbuku='$id'");
      $info = mysqli_fetch_array($sql);
     ?>

     <embed src="../petugas/asset/buku/<?php echo $info['buku'];?>" type="application/pdf" width="100%" height="500">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>