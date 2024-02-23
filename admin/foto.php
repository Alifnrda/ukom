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
          <a href="home.php" class="nav-link text-light">Home</a>
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
          <div class="card-header">Tambah foto</div>
          <div class="card-body">
            <form action="../config/aksi_foto.php" method="POST" enctype="multipart/form-data">
              <label class="form-label">Judul Foto</label>
              <input type="text" name="Judulfoto" class="form-control" required>
              <label class="form-label">Deskripsi</label>
              <textarea class="form-control" name="Deskripsifoto" required></textarea>
              <label class="form-label">Album</label>
              <select class="form-control" name="Albumid" required>
                <?php
                $Userid = $_SESSION['Userid'];
                $sql_album = mysqli_query($koneksi, "SELECT * FROM album WHERE Userid='$Userid'");
                while ($data_album = mysqli_fetch_array($sql_album)) { ?>
                  <option value="<?php echo $data_album["Albumid"] ?>">
                    <?php echo $data_album["Namaalbum"] ?>
                  </option>
                <?php } ?>
              </select>
              <label class="form-label">File</label>
              <input type="file" class="form-control" name="Lokasifile" required>
              <button type="submit" class="btn btn-primary" name="tambah">Tambah Data</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Data Galeri Foto</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <th>#</th>
                <th>Foto</th>
                <th>Judulfoto</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $Userid = $_SESSION['Userid'];
                $sql = mysqli_query($koneksi, "SELECT * FROM foto WHERE Userid='$Userid'");
                while ($data = mysqli_fetch_array($sql)) {
                  ?>
                  <tr>
                    <td>
                      <?php echo $no++ ?>
                    </td>
                    <td>
                      <img src="../assets/img/<?php echo $data['Lokasifile'] ?>" width="100">
                    </td>
                    <td>
                      <?php echo $data['Judulfoto'] ?>
                    </td>
                    <td>
                      <?php echo $data['Deskripsifoto'] ?>
                    </td>
                    <td>
                      <?php echo $data['Tanggalunggah'] ?>
                    </td>
                    <td>
                      <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#edit<?php echo $data['Fotoid'] ?>">
                        Edit
                      </button>

                      <div class="modal fade" id="edit<?php echo $data['Fotoid'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="../config/aksi_Foto.php" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="Fotoid" value="<?php echo $data['Fotoid'] ?>">
                                <label class="form-label">Judul Foto</label>
                                <input type="text" name="Judulfoto" value="<?php echo $data['Judulfoto'] ?>"
                                  class="form-control" required>
                                <label class="form-label">Deskripsi</label>
                                <textarea class="form-control" name="Deskripsifoto" required><?php echo $data['Deskripsifoto'] ?>
                                  </textarea>

                                <label class="form-label">Album</label>
                                <select class="form-control" name="Albumid">
                                  <?php
                                  $sql_album = mysqli_query($koneksi, "SELECT * FROM album WHERE Userid='$Userid'");
                                  while ($data_album = mysqli_fetch_array($sql_album)) { ?>
                                    <option <?php if($data_album['Albumid'] == $data['Albumid']) {?> selected="selected" <?php } ?> value="<?php echo $data_album["Albumid"] ?>">
                                      <?php echo $data_album["Namaalbum"] ?>
                                    </option>
                                  <?php } ?>
                                </select>
                                <label class="form-label">Foto</label>
                                <div class="row">
                                  <div class="col-md-4">
                                  <img src="../assets/img/<?php echo $data['Lokasifile'] ?>" width="100">
                                  </div>
                                  <div class="col-md-8">
                                  <label class="form-label">GantiFile</label>
                                  <input type="file" class="form-control" name="Lokasifile">

                                  </div>
                                </div>
                                
                            </div>
                            <div class="modal-footer">
                              <button type="submit" name="edit" class="btn btn-denger">Edit Data</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>


                      <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#hapus<?php echo $data['Fotoid'] ?>">
                        hapus
                      </button>

                      <div class="modal fade" id="hapus<?php echo $data['Fotoid'] ?>" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">

                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">hapus Data</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="../config/aksi_Foto.php" method="POST">
                                <input type="hidden" name="Fotoid" value="<?php echo $data['Fotoid'] ?>">
                                Apakah anda yakim akan menghapus data <strong>
                                  <?php echo $data['Judulfoto'] ?>
                                </strong>
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