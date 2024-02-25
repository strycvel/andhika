<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body {
    background: url(img/matcha.jpg) no-repeat fixed;
   -webkit-background-size: 100% 100%;
   -moz-background-size: 100% 100%;
   -o-background-size: 100% 100%;
   background-size: 100% 100%;
}

</style>
  </style>
  <body>


  <div class="container">
    <div class="content">
        <!-- <div class="card" style="margin-top: 1rem;"> -->
            <div class="row">
                <div class="col m-3">
                    
                
                    <center><img src="img/logoo.png" width="70" alt=""></center>
                    <form action="aksi_daftar.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white"><b>NIS</b></label>
                        <input type="text" name="nis" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIS">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white"><b>Nama Lengkap</b></label>
                        <input type="text" name="namalengkap" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama Lengkap">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white"><b>Email</b></label>
                        <input type="text" name="email" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white"><b>Alamat</b></label>
                        <input type="text" name="alamat" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Alamat">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white"><b>Username</b></label>
                        <input type="text" name="username" class="form-control" required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white"><b>Password</b></label>
                        <input type="password" name="password" class="form-control" required id="exampleInputPassword1" placeholder="Masukan Password">
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label text-white"><b>Level</b></label>
                    <select class="form-select" name="level" aria-label="Default select example">         
                        <option selected></option>
                        <option value="3">peminjam</option>
                    </select><br>
                    </div>  
                    <button type="submit" class="btn btn-primary"onclick="return confirm('Simpan Pendaftaran?')">Save</button>
                    <button type="submit" class="btn btn-warning"><a href="index.php" style="text-decoration: none;">Login Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>