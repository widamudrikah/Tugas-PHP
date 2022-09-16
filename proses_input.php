<?php

include 'koneksi2.php';

$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Biaya = $_POST['Biaya'];

mysqli_query($koneksi, "INSERT INTO mahasiswi VALUES ('$NIM', '$Nama', '$Biaya')");

header("location:read.php");
?>