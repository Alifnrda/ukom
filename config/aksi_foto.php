<?php
session_start();
include 'koneksi.php';

if (isset($_POST['tambah'])) {
    $Judulfoto = $_POST['Judulfoto'];
    $Deskripsifoto = $_POST['Deskripsifoto'];
    $Tanggalunggah = date('Y-m-d');
    $Albumid = $_POST['Albumid'];
    $Userid = $_SESSION['Userid'];
    $Foto = $_FILES['Lokasifile']['name'];
    $tmp = $_FILES['Lokasifile']['tmp_name'];
    $Lokasi = '../assets/img/';
    $Namafoto = rand() .'.'. $Foto;

    move_uploaded_file($tmp, $Lokasi.$Namafoto);

    $sql = mysqli_query($koneksi,"INSERT INTO foto VALUES('','$Judulfoto','$Deskripsifoto','$Tanggalunggah', '$Namafoto', '$Albumid','$Userid')");

    echo "<script>
    alert('Data berhasil disimpan!');
    location.href='../admin/Foto.php';
    </script>";
}

if (isset($_POST["edit"])) {
    $Fotoid = $_POST['Fotoid'];
    $Judulfoto = $_POST['Judulfoto'];
    $Deskripsifoto = $_POST['Deskripsifoto'];
    $Tanggalunggah = date('Y-m-d');
    $Albumid = $_POST['Albumid'];
    $Userid = $_SESSION['Userid'];
    $Foto = $_FILES['Lokasifile']['name'];
    $tmp = $_FILES['Lokasifile']['tmp_name'];
    $Lokasi = '../assets/img/';
    $Namafoto = rand() .'.'. $Foto;

    if ($Foto == nulL){
        $sql = mysqli_query($koneksi,"UPDATE foto SET Judulfoto='$Judulfoto',Deskripsifoto='$Deskripsifoto',Tanggalunggah='$Tanggalunggah',Albumid='$Albumid' WHERE Fotoid='$Fotoid'");
    }else{
        $query = mysqli_query($koneksi,"SELECT * FROM foto WHERE Fotoid='$Fotoid'");
        $data =mysqli_fetch_array($query);
        if (is_file('../assects/img'. $data['Lokasifile'] .'')){
            unlink('../assects/img'. $data['Lokasifile'] .'');
    }
    move_uploaded_file($tmp, $Lokasi.$Namafoto);
    $sql = mysqli_query($koneksi,"UPDATE foto SET Judulfoto='$Judulfoto',Deskripsifoto='$Deskripsifoto',tanggalunggah='$Tanggalunggah',Lokasifile='$Namafoto',albumid='$Albumid' WHERE Fotoid='$Fotoid'");
}
echo "<script>
    alert('Data berhasil diperbarui!');
    location.href='../admin/Foto.php';
    </script>";
}   
if (isset($_POST["hapus"])) {
    $Fotoid = $_POST["Fotoid"];
    $query = mysqli_query($koneksi,"SELECT * FROM foto  WHERE Fotoid='$Fotoid'");
    $data =mysqli_fetch_array($query);
    if (is_file('../assects/img'. $data['Lokasifile'] .'')){
        unlink('../assects/img'. $data['Lokasifile'] .'');
}
$sql = mysqli_query( $koneksi,"DELETE FROM foto WHERE Fotoid='$Fotoid'");
echo "<script>
alert('Data berhasil dihapus!');
location.href='../admin/foto.php';
</script>";
}
