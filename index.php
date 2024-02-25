<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
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
        <!-- <div class="card"> -->
        <div class="col m-5">

        <center><img src="img/logoo.png" width="250" alt=""></center>
      
            <div class="row mb-3">
                <div class="col m-3">
                  <!-- <h2 class="text-white">Login Here</h2> -->
                  <?php
                    if  (isset($_GET['pesan'])){
                      if  ($_GET['pesan']=="gagal"){
                        echo"<div class='alert alert-danger'>Username atau Password Anda Salah</div>";
                      }
                    }
                  ?>
                  
                    <form action="aksi_login.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label text-white"><b>Username</b></label>
                        <input type="text" name="username" class="form-control" required="required" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan username">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label text-white"><b>Password</b></label>
                        <input type="password" name="password" class="form-control" required id="exampleInputPassword1" placeholder="Masukan password">
                    </div>
                    
                    <button type="submit" class="btn btn-primary"onclick="return confirm('Apakah data sudah sesuai?')">Login</button>
                    
                    <button type="submit" class="btn btn-warning"><a href="register.php" style="text-decoration: none;">Register Now</button>

                    </form>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>