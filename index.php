<?php
include "config/koneksi.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Galeri Foto</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary ">
    <div class="container">
      <a class="navbar-brand text-light" href="index.php">Web Galeri Foto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2" id="navbarNav">
        <ul class="navbar-nav me-auto">

        </ul>
        <a href="register.php" class="btn btn-success m-1">daftar</a>
        <a href="login.php" class="btn btn-success m-1">masuk</a>
      </div>
    </div>
  </nav>


  <div class="container mt-3">
    <div class="row">
      <?php
      $query = mysqli_query($koneksi, "SELECT * FROM foto");
      while ($data = mysqli_fetch_array($query)) {
        ?>
        <div class="col-md-3">
          <div class="card">
            <img src="assets/img/<?php echo $data['Lokasifile'] ?>" class="card-img-top"
              title="<?php echo $data['Judulfoto'] ?> " style="height: 12rem;">
              <div class="card-footer text-center">
                <?php
                $Fotoid = $data['Fotoid'];
                $ceksuka = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE Fotoid='$Fotoid'");

                if (mysqli_num_rows($ceksuka) == 1) { ?>
                  <a href="login.php" type="submit" name="suka"><i class="fa fa-heart"></i></a>

                <?php } else { ?>
                  <a href="login.php" type="submit" name="suka"><i
                      class="fa-regular fa-heart"></i></a>
                <?php }
                $like = mysqli_query($koneksi, "SELECT * FROM likefoto WHERE Fotoid='$Fotoid'");
                echo mysqli_num_rows($like) . ' Suka';
                ?>
                 <a href="login.php" type="button" ><i class="fa-regular fa-comment"></i></a>
                <?php
                $jmlkomen = mysqli_query($koneksi," SELECT * FROM komentarfoto WHERE Fotoid='$Fotoid'");
                echo mysqli_num_rows($jmlkomen) ." komentar";
                ?>
              </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  <footer class="d-flex justify-content-center border-top mt-3 bg-dark text-light fixed-bottom">
    <p>&copy;ujian kompetisi | Alif Nuranda</p>
  </footer>
  <script type="text/>javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>