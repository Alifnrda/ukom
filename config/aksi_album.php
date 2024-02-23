<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $Namaalbum = $_POST['Namaalbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $Tanggalbuat = date('Y-m-d');
    $Userid = $_SESSION['Userid'];

    $sql = mysqli_query($koneksi,"INSERT INTO album VALUES('','$Namaalbum','$Deskripsi','$Tanggalbuat','$Userid')");

    echo "<script>
    alert('Data berhasil disimpan!');
    location.href='../admin/album.php';
    </script>";
}

if (isset($_POST['edit'])) {
    $Albumid = $_POST['Albumid'];
    $Namaalbum = $_POST['Namaalbum'];
    $Deskripsi = $_POST['Deskripsi'];
    $Tanggalbuat = date('Y-m-d');
    $Userid = $_SESSION['Userid'];

    $sql = mysqli_query($koneksi,"UPDATE album SET Namaalbum='$Namaalbum', Deskripsi='$Deskripsi', Tanggalbuat='$Tanggalbuat' WHERE Albumid='$Albumid'");

    echo "<script>
    alert('Data berhasil diperbarui!');
    location.href='../admin/album.php';
    </script>";
}

if (isset($_POST["hapus"])) {
    $Albumid = $_POST['Albumid'];

    $sql = mysqli_query($koneksi, "DELETE FROM album WHERE Albumid='$Albumid'");

    echo "<script>
    alert('Data berhasil diHapus!');
    location.href='../admin/album.php';
    </script>";
}
?>
