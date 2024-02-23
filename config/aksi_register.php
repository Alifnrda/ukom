<?php
include('koneksi.php');
$Username = $_POST['Username'];
$Pasword = md5($_POST['Pasword']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];

$sql = mysqli_query($koneksi,"INSERT INTO user VALUES('', '$Username','$Pasword','$Email','$NamaLengkap','$Alamat')");

if ($sql) {
    echo "<script>
    alert('pendaftaran akun berhasil');
    location.href='../login.php';
    </script>";
}
?>