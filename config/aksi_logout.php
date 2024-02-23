<?php
session_start();
session_destroy();
echo "<script>
alert('login berhasil');
location.href='../index.php';
</script>";
?>
