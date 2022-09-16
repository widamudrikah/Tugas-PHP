<?php

include 'koneksi2.php';
$NIM = $_GET['NIM'];

$data =mysqli_query($koneksi, "SELECT * FROM mahasiswi WHERE NIM='$NIM'");
while($mahasiswi = mysqli_fetch_array($data)){
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data mahasiswi</title>
</head>
<body>
    <form action="proses-edit.php" method="post">

    <input type="hidden" name="NIM" value="<?php print $mahasiswi['NIM'];?>">

    <label for="Nama">Nama</label><br>
    <input type="text" name="Nama" value="<?php print $mahasiswi['Nama'];?>">
    <br>

    <br>
    <label for="Biaya">Biaya</label><br>
    <input type="number" name="Biaya" value="<?php print $mahasiswi['Biaya'];?>">
    <br>

    <br>
    <button type="submit">simpan perubahan</button>
    </form>
    <?php
        }
        ?>
</body>
</html>