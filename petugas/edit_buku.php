<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="card" style="margin-top: 1rem;">
        <div class="row m-2">
       
            <div class="col-sm-7">
                <center><h3>Form Edit Buku</h3></center>
                <?php
                    include '../koneksi.php';
                    $id = $_GET['idbuku'];
                    $data = mysql_query($koneksi, "SELECT FROM buku WHERE idbuku='$id'");
                    while($d = mysqli_fetch_array($data)){

                ?>
                <form action="aksi_tambah_buku.php" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul Buku</label>
                        <input type="text" maxlength="255" name="judul" value="" class="form-control" required>
                    </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penulis Buku</label>
                        <input type="text" maxlength="255" name="penulis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Penerbit Buku</label>
                        <input type="text" maxlength="255" name="penerbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        </div>
                        <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tahun Terbit</label>
                        <input type="text" minlength="4" name="tahunterbit" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Stok Buku</label>
                        <input type="text" maxlength="20" name="stok" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        </div>
                        <div class="mb-3">
                            <label for="formFIleMultiple" class="form-label">Upload Cover<span class="text-danger"></span></label>
                            <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
                            
                            
                        </div>
                        <div class="mb-3">
                            <label for="formFIleMultiple" class="form-label">Upload Buku<span class="text-danger">*pdf</span></label>
                            <input class="form-control" name="buku" type="file" id="formFileMultiple"multiple>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-success text-white">Tambah</button>
</div><p>
    
</p>
                    <p><a href="databuku.php" class="btn btn-danger text-white">Kembali</a>
                          
                    </div>

                </form>
                <?php
                    }
?>
            </div>
        </div>
    </div>
  </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>