<?php
session_start();
include ('koneksi.php');

$Foto = $_POST['Fotoid'];
$Userid = $_SESSION['Userid'];
$Isikomentar = $_POST['isikomentar'];
$Tanggalkomentar = date('y-m-d');

$query = mysqli_query($koneksi,"INSERT INTO komentarfoto VALUES('','$Foto','$Userid','$Isikomentar','$Tanggalkomentar')");

echo "<script>
alert('pendaftaran akun berhasil');
location.href='../admin/index.php';

</script>";
?>