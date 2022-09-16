<?php
include 'koneksi2.php';

$NIM = $_GET['NIM'];
mysqli_query($koneksi, "DELETE FROM mahasiswi WHERE NIM='$NIM'");
header("location:read.php");
?>