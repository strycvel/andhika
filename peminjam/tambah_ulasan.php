<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Ulasan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="card" style="margin-top: 3rem;">
        <div class="row m-4">
            <div class="col-sm-7">
                <h3>Form Ulasan</h3>
                <a href="ulasan.php" class="btn btn-danger text-white">Kembali</a>

                <form action="aksi_tambah_ulasan.php" method="POST">
                <div class="mb-3">
                        <!-- <label for="exampleInputEmail1" class="form-label">ID Ulasan</label> -->
                        <input type="hidden" name="IDulasan" class="form-control" required>
                    </div>
                <div class="mb-3">
                        <!-- <label for="exampleInputEmail1" class="form-label">ID Ulasan</label> -->
                        <input type="hidden" name="IDuser" class="form-control" required>
                    </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" required>
                    </div>
                
                    <div class="row">
                        <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Ulasan</label>
                        <input type="text" name="ulasan" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Rating</label>
                        <input type="text" name="rating" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('konfirmasi ulasan')">Tambah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
  </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>