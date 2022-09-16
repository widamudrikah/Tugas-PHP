<?php

include 'koneksi2.php';

$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Biaya = $_POST['Biaya'];

$data = mysqli_query($koneksi, "UPDATE mahasiswi SET Nama='$Nama', Biaya='$Biaya' WHERE NIM='$NIM'");

header("location:read.php");

?>