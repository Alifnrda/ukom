<?php
session_start();
include '../config/koneksi.php';
if ($_SESSION['status'] != 'login') {
  echo "<script>
    alert('Anda belum login!');
    location.href='../index.php';
    </script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Galeri Foto</title>
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand text-light" href="index.php">Web Galeri Foto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse mt-2" id="navbarNav">
        <div class="navbar-nav me-auto">
          <a href="album.php" class="nav-link text-light">album</a>
          <a href="foto.php" class="nav-link text-light">Foto</a>
        </div>

        <a href="../config/aksi_logout.php" class="btn btn-danger m-1">Keluar</a>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card mt-2">
          <div class="card-header">Tambah album</div>
          <div class="card-body">
            <form action="../config/aksi_album.php" method="POST">
              <label class="form-label">Nama Album</label>
              <input type="text" name="Namaalbum" class="form-control" required>
              <label class="form-label">Deskripsi</label>
              <textarea class="form-control" name="Deskripsi" required></textarea>
              <button type="submit" class="btn btn-primary mt-3" name="tambah">Tambah Data</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Data Album</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <th>#</th>
                <th>Nama Album</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $Userid = $_SESSION['Userid'];
                $sql = mysqli_query($koneksi, "SELECT * FROM album WHERE Userid='$Userid'");
                while ($data = mysqli_fetch_array($sql)) {
                  ?>
                  <tr>
                    <td>
                      <?php echo $no++ ?>
                    </td>
                    <td>
                      <?php echo $data['Namaalbum'] ?>
                    </td>
                    <td>
                      <?php echo $data['Deskripsi'] ?>
                    </td>
                    <td>
                      <?php echo $data['Tanggalbuat'] ?>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#edit<?php echo $data['Albumid'] ?>">
                        Edit
                      </button>

                      <div class="modal fade" id="edit<?php echo $data['Albumid'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="../config/aksi_album.php" method="POST">
                                <input type="hidden" name="Albumid" value="<?php echo $data['Albumid'] ?>">
                                <label class="form-label">Nama Album</label>
                                <input type="text" name="Namaalbum" value="<?php echo $data['Namaalbum'] ?>"
                                  class="form-control" required>
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="Deskripsi" required>
                                  <?php echo $data['Deskripsi']; ?>
                                  </textarea>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="edit" class="btn btn-denger">Edit Data</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                 
                      <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#hapus<?php echo $data['Albumid'] ?>">
                        hapus
                      </button>

                      <div class="modal fade" id="hapus<?php echo $data['Albumid'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">hapus Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="../config/aksi_album.php" method="POST">
                                <input type="hidden" name="Albumid" value="<?php echo $data['Albumid'] ?>">
                                Apakah anda yakim akan menghapus data <strong><?php echo $data['Namaalbum']?></strong>
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="hapus" class="btn btn-denger">hapus Data</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>

                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>


      </div>
    </div>
  </div>

  <footer class="d-flex justify-content-center border-top mt-3 bg-dark text-light fixed-bottom">
    <p>&copy;ujian kompetisi | Alif Nuranda</p>
  </footer>



  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>