<?php
session_start();
include "koneksi.php";
$Fotoid = $_GET["Fotoid"];
$Userid = $_SESSION['Userid'];

$ceksuka = mysqli_query($koneksi,"SELECT * FROM likefoto WHERE Fotoid='$Fotoid' AND Userid='$Userid'");

if (mysqli_num_rows($ceksuka) == 1){
    while($row = mysqli_fetch_array($ceksuka)){
        $Likeid = $row['Likeid'];
        $query = mysqli_query($koneksi,"DELETE FROM likefoto WHERE Likeid='$Likeid'");
        echo "<script>
location.href='../admin/home.php';
</script>";
    }
}else{
    $Tanggallike = date('Y-m-d');
$query = mysqli_query($koneksi,"INSERT INTO likefoto VALUES('','$Fotoid','$Userid','$Tanggallike')");

echo "<script>
location.href='../admin/home.php';
</script>";
}



?>