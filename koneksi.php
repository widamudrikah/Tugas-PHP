<?php
$servername = "localhost";
$username = "root";
$pass = "";

$conn = new mysqli($servername, $username, $pass);

if($conn->connect_error) {
    die("koneksi gagal: " . $conn->connect_error);
}
echo "koneksi berhasil";
?>