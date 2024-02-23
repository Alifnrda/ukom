<?php
session_start();
include 'koneksi.php';

$Username =$_POST['Username'];
$Pasword =md5($_POST['Pasword']);

$sql = mysqli_query($koneksi, "SELECT * FROM user WHERE Username='$Username' AND Pasword='$Pasword'");

$cek = mysqli_num_rows($sql);

if($cek > 0){
    $data = mysqli_fetch_array($sql);
    $_SESSION['Username'] = $data['Username'];
    $_SESSION['Userid'] = $data['Userid'];
    $_SESSION['status'] = 'login';
    echo "<script>
    alert('login berhasil');
    location.href='../admin/index.php';
    </script>";
}else{
    echo"<script>
alert('Username atau Pasword salah!');
location.href='../login.php';
</script>";
}
?>
