<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Galeri Foto</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Web Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNav">
      <ul class="navbar-nav me-auto">
       
      </ul>
      <a href="register.php" class="btn btn-outline-primary m-1">daftar</a>
      <a href="login.php" class="btn btn-outline-primary m-1">masuk</a>
    </div>
  </div>
</nav>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                    </div>
                    <form action="config/aksi_login.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="Username" class="form-control" require>
                        <label class="form-label">Pasword</label>
                        <input type="password" name="Pasword" class="form-control" require>
                        <div class="d-grrid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">Masuk</button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum Punya Akun? <a href="register.php">Daftar Disini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-dark text-light fixed-bottom">
<p>&copy;ujian kompetisi | Alif Nuranda</p>
</footer>
    <script type="text/>javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>