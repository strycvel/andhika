<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Tambah Anggota</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>

  <div class="container">
    <div class="card" style="margin-top: 3rem;">
        <div class="row m-4">
            <div class="col-sm-7">
                <h3>Form Anggota</h3>
                <form action="aksi_tambah_anggota.php" method="POST">
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">NIS</label>
                        <input type="text" name="nis" class="form-control" required>
                    </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="namalengkap" class="form-control" required>
                    </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Alamat</label>
                        <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        </div>
                        
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="text" name="password" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                        
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Level</label>
                    <select class="form-select" name="level" aria-label="Default select example">         
                        <option selected></option>
                        <option value="3">peminjam</option>
                    </select>
                    </div>
                    <div class="card">
                          
                    <button type="submit" class="btn btn-primary"onclick="return confirm('Lanjutkan Tambah Anggota?')">Tambah</button>
                <a href="peminjam.php" class="btn btn-dark text-white">Kembali</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
  </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>